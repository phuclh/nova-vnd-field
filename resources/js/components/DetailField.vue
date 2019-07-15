<template>
    <panel-item :field="formattedField"/>
</template>

<script>
    import {currencyMixin} from "../currencyMixin";

    export default {
        mixins: [currencyMixin],

        props: ['resource', 'resourceName', 'resourceId', 'field'],

        computed: {
            formattedField() {
                const field = this.field;

                field.value = this.display(field.value);

                return field;
            }
        },
    }
</script>
