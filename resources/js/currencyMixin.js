export const currencyMixin = {
    methods: {
        convertToCurrency(e) {
            let newValue = this.removeFormat(e.target.value);

            if (isNaN(newValue)) newValue = 0;

            this.value = this.format(newValue);
        },

        format(value) {
            return value.toFixed(0).replace(/(\d)(?=(\d{3})+(?:\.\d+)?$)/g, "$1,")
        },

        removeFormat(value) {
            return parseInt(value.replace(/[^\d\.]/g, ""));
        }
    }
};