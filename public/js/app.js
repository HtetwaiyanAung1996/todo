
new Vue({
    el: '#app',
    data: {
        responseData: [],
        form: { 
            'text':'' 
        }
    },
    mounted () {
        this.getTodo();
    },
    
    methods: {
        getTodo:function () { //read todo
            var vm = this;
            axios
                .get('http://todo.test/todo')
                .then(function(response){
                    // console.log(response.data);
                    vm.responseData = response.data;
                });
        },
        createTodo:function () { //storetodo
            var vm = this;  
            var input = this.form;
            // console.log(input);
            axios
                .post('http://todo.test/todo',input)
                .then(function(response){
                    vm.getTodo();
                    vm.form.text = ""; // clean text field
            });
        },
        deleteTodo:function (todo) { //deletetodo
            var vm = this;
            console.log(todo.id);
            var formData = {
                id: todo.id
            };
            console.log(formData);
        
            axios
                .post('http://todo.test/todo/delete',formData)
                .then(function (response) {
                    console.log(response.data);
                    vm.getTodo();
                });
        }

    }
    
})
