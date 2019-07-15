<template>
    <panel-item :field="formattedField"/>
</template>

<script>
    export default {
        props: ['resource', 'resourceName', 'resourceId', 'field'],

        computed: {
            formattedField() {
                const field = this.field;

                field.value = parseInt(field.value).toFixed(0).replace(/(\d)(?=(\d{3})+(?:\.\d+)?$)/g, "$1,") + ' đ';

                return field;
            }
        },
    }
</script>
