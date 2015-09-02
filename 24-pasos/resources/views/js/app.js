/**
 * Created by Kenneth on 2/09/2015.
 */
var app = angular.module("sampleApp", ["firebase"]);

app.controller("SampleCtrl", function($scope, $firebaseArray) {
    var ref = new Firebase("https://24-pasos.firebaseio.com/messages");

    // create a synchronized array
    $scope.messages = $firebaseArray(ref);

    // add new items to the array
    // the message is automatically added to our Firebase database!
    $scope.addMessage = function() {
        $scope.messages.$add({
            text: $scope.newMessageText
        });
    };

    // click on `index.html` above to see $remove() and $save() in action
});
