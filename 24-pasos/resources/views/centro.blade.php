<html ng-app="sampleApp">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.2.4/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/1.1.2/angularfire.min.js"></script>
    <script src="js/app.js"></script>
</head>

<body ng-controller="SampleCtrl">
<ul>
    <li ng-repeat="message in messages">
        <!-- edit a message -->
        <input ng-model="message.text" ng-change="messages.$save(message)" />

        <!-- delete a message -->
        <button ng-click="messages.$remove(message)">Delete Message</button>
    </li>
</ul>

<!-- push a new message onto the array -->
<form ng-submit="addMessage()">
    <input ng-model="newMessageText" />
    <button type="submit">Add Message</button>
</form>
</body>
</html>