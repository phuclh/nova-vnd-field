Nova.booting((Vue, router, store) => {
    Vue.component('index-vnd', require('./components/IndexField'))
    Vue.component('detail-vnd', require('./components/DetailField'))
    Vue.component('form-vnd', require('./components/FormField'))
})
