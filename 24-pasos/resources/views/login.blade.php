<html ng-app="sampleApp" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
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


<div class="row">
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Card Title</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>
</div>


</body>
</html>