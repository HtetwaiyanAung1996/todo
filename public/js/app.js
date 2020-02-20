
new Vue({
    el: '#app',
    data: {
        responseData: [],
        form: { 
            'text':'' 
        },
        updateForm: {
            'text':'',
            'id' :''
        },
        check: {
            'status':''
        },
        activeColor: 'blue'
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
        },
        editTodo:function (todo) { //edittodo
            var vm = this;
            
            vm.updateForm.text = todo.text;
            vm.updateForm.id = todo.id;
            // console.log(formUpdate);
            // console.log(vm.updateForm.id);
        },
        updateTodo:function () { //updatetodo
            var vm = this;
            var update = vm.updateForm;
            console.log(update);
            axios
                .post('http://todo.test/todo/update',update)
                .then(function (response) {
                    console.log(response.data);
                    vm.getTodo();
                    vm.updateForm.text = "";

                });
        },
        checkTodo:function (todo) {
            var check = todo;
            var vm =this;
            // console.log(check);
            axios
            .post('http://todo.test/todo/check',check)
            .then(function (response) {
                console.log(response.data);
                vm.getTodo();
                

            });
        }
    }
    
})
