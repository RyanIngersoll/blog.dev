
angular
  .module('todoApp', [])
  // .controller('MainCtrl', MainCtrl);
  .controller('TodoController', 

    ['$scope', function($scope) {

    $scope.todos = [
      {text:'Hello World!', done:false},
      {text:'Fizz Buzz/PHP', done:false},
      {text:'ToDo/JavaScript', done:false},
      {text:'Whack-a-Mole/Jquery', done:false},
      {text:'Laravel/Deployment', done:false},
      {text:'Final Project', done:false},
      {text:'What Comes Next?', done:false},
      
      ];
 
    $scope.addTodo = function() {
      
 
          $scope.todos.push({text:$scope.todoText, done:false});
          $scope.todoText = '';
        };
 
    $scope.remaining = function() {
      var count = 0;
      angular.forEach($scope.todos, function(todo) {
        count += todo.done ? 0 : 1;
      });
      return count;
      console.log(count);
    }; 
 
    $scope.archive = function() {
      var oldTodos = $scope.todos;
      $scope.todos = [];
      angular.forEach(oldTodos, function(todo) {
        if (!todo.done) $scope.todos.push(todo);
      });
    };

  }]);


