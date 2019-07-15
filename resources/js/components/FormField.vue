<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <input :id="field.name"
                   type="text"
                   class="w-full form-control form-input form-input-bordered"
                   :class="errorClasses"
                   :placeholder="field.name"
                   v-model="value"
                   @keyup="convertToCurrency"
            />
        </template>
    </default-field>
</template>

<script>
    import {FormField, HandlesValidationErrors} from 'laravel-nova'
    import {currencyMixin} from '../currencyMixin';

    export default {
        mixins: [FormField, HandlesValidationErrors, currencyMixin],

        props: ['resourceName', 'resourceId', 'field'],

        methods: {
            /*
             * Set the initial, internal value for the field.
             */
            setInitialValue() {
                this.value = this.field.value ? this.format(parseInt(this.field.value)) : ''
            },

            /**
             * Fill the given FormData object with the field's internal value.
             */
            fill(formData) {
                formData.append(this.field.attribute, this.removeFormat(this.value) || '')
            },

            /**
             * Update the field's internal value.
             */
            handleChange(value) {
                this.value = value
            }
        },
    }
</script>
