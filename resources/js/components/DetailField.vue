<template>
    <panel-item :field="formattedField"/>
</template>

<script>
    export default {
        props: ['resource', 'resourceName', 'resourceId', 'field'],

        computed: {
            formattedField() {
                const field = this.field;

                field.value = display(field.value);

                return field;
            }
        },
    }
</script>
