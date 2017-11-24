new Vue({
    el: 'body',
    data: {
        posts: [],
        loading: false,
        error: false,
        query: ''
    },
    methods:{
        search: function() {
            // Очистим сообщение об ошибке.
            this.error = '';
            // Опустошим набор данных.
            this.posts = [];
            // Установим признак загрузки данных в true,
            // для отображения процесса поиска "Searching...".
            this.loading = true;
            // делаем get запрос к нашему API и передаем в него поисковый запрос.
            this.$http.get('/api/search?q=' + this.query).then((response) => {
                // Елси ошибки нет, заполняем массив products, в случае ошибки заполняем ее
                response.body.error ? this.error = response.body.error : this.posts = response.body;
            //console.log(posts);
            // Запрос завершен. Меняем статус загрузки
            this.loading = false;
            // Очищаем поисковое слово.
            this.query = '';
        });
        }
    }
});