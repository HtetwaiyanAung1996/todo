<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>I am Testing Vue Js</title>
</head>
<body>
    <div id="app">
        {{-- <pre>@{{ responseData }}</pre> --}}
        <div class="container">
            <div class="row">
                {{-- <pre>@{{ form }}</pre> --}}
                <div class="col-lg-12">
                    <h1>Tasks <span>()</span></h1>
                </div>
                <div class="col-lg-12">
                    <input type="text" id="text" name ="text" v-model ="form.text">
                    <span>
                        <button class="btn-primary" @click.prevent="createTodo()" id="name" name="name">
                        <i class="fa fa-plus"></i>Add
                    </button>
                </span>
                </div>
                <div class="col-lg-12 mt-3">
                    <button class="btn-warning"> 
                        <i class="fa fa-check"></i>Clear Completed</button>
                    <button class="btn-danger">  
                        <i class="fa fa-trash"></i>Clear All</button>
                </div>
            </div>
        </div>
        <div class="col-lg-12 m-5" >
            <table class="table table-bordered">
                <tr v-for="todo in responseData">
                    <td >
                        @{{ todo.text}} 
                    </td>
                    <td>
                        <button class="btn-danger" @click.prevent="deleteTodo(todo)">
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>