<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign In to MS stuff</title>
<!-- load the api -->
<script src="//js.live.net/v5.0/wl.js"></script>
</head>


<body>
<h1>Sign In</h1>
<script>

//see http://msdn.microsoft.com/en-us/library/live/hh243641.aspx

//set up a call back for the login:
WL.Event.subscribe("auth.login", onLogin);

WL.init({
    client_id: APP_CLIENT_ID,
    redirect_uri: REDIRECT_URL,
    scope: "wl.signin", 
    response_type: "token"
});


//add the Live Connect sing-in control
WL.ui({
    name: "signin",
    element: "signin"
});

function onLogin() {
    document.getElementById("infoLabel").innerText = "Signed in.";
}

function moreScopes_onClick() {
    WL.login({
        scope: ["wl.signin", "wl.basic"]
    }).then(
        function (session) {
            document.getElementById("infoLabel").innerText = "Signed in.";
        },
        function (sessionError) {
            document.getElementById("infoLabel").innerText = 
                "Error signing in: " + sessionError.error_description;
        }
    );
}


function greetUser_onClick() {
    WL.login({
        scope: "wl.basic"
    }).then(
        function (response)
        {
            WL.api({
                path: "me",
                method: "GET"
            }).then(
                function (response){
                    document.getElementById("infoArea").innerText =
                        "Hello, " + response.first_name + " " +
                        response.last_name + "!";
                },
                function (responseFailed){
                    document.getElementById("infoArea").innerText =
                        "Error calling API: " + responseFailed.error.message;
                }
            );
        },
        function (responseFailed){
            document.getElementById("infoArea").innerText =
                "Error signing in: " + responseFailed.error_description;
        }
    );
}


</script>

<div id="infoLabel"></div>

</body>
</html>