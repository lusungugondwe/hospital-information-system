# Endpoints


## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsanctum-csrf-cookie"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"></code></pre>
</div>
<div id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie"></code></pre>
</div>
<form id="form-GETsanctum-csrf-cookie" data-method="GET" data-path="sanctum/csrf-cookie" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsanctum-csrf-cookie" onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsanctum-csrf-cookie" onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsanctum-csrf-cookie" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sanctum/csrf-cookie</code></b>
</p>
</form>


## api/user_Registration




> Example request:

```bash
curl -X POST \
    "http://localhost/api/user_Registration" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_Registration"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-user_Registration" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user_Registration"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user_Registration"></code></pre>
</div>
<div id="execution-error-POSTapi-user_Registration" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user_Registration"></code></pre>
</div>
<form id="form-POSTapi-user_Registration" data-method="POST" data-path="api/user_Registration" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user_Registration', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user_Registration" onclick="tryItOut('POSTapi-user_Registration');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user_Registration" onclick="cancelTryOut('POSTapi-user_Registration');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user_Registration" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user_Registration</code></b>
</p>
</form>


## api/token




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Session store not set on request.",
    "exception": "RuntimeException",
    "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Request.php",
    "line": 487,
    "trace": [
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\routes\\api.php",
            "line": 27,
            "function": "session",
            "class": "Illuminate\\Http\\Request",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 205,
            "function": "{closure}",
            "class": "Illuminate\\Routing\\RouteFileRegistrar",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 179,
            "function": "runCallable",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 681,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 33,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Laravel\\Sanctum\\Http\\Middleware\\{closure}",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 34,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 683,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 658,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 624,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 613,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 170,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\app\\Http\\Middleware\\Cors.php",
            "line": 18,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 145,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 32,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 90,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 34,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 590,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Application.php",
            "line": 1009,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Application.php",
            "line": 273,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Application.php",
            "line": 149,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 131,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-token" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-token"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-token"></code></pre>
</div>
<div id="execution-error-GETapi-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-token"></code></pre>
</div>
<form id="form-GETapi-token" data-method="GET" data-path="api/token" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-token', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-token" onclick="tryItOut('GETapi-token');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-token" onclick="cancelTryOut('GETapi-token');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-token" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/token</code></b>
</p>
</form>


## api/sign_in




> Example request:

```bash
curl -X POST \
    "http://localhost/api/sign_in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/sign_in"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-sign_in" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-sign_in"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-sign_in"></code></pre>
</div>
<div id="execution-error-POSTapi-sign_in" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-sign_in"></code></pre>
</div>
<form id="form-POSTapi-sign_in" data-method="POST" data-path="api/sign_in" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-sign_in', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-sign_in" onclick="tryItOut('POSTapi-sign_in');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-sign_in" onclick="cancelTryOut('POSTapi-sign_in');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-sign_in" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/sign_in</code></b>
</p>
</form>


## api/forgot_password




> Example request:

```bash
curl -X POST \
    "http://localhost/api/forgot_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/forgot_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-forgot_password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-forgot_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-forgot_password"></code></pre>
</div>
<div id="execution-error-POSTapi-forgot_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-forgot_password"></code></pre>
</div>
<form id="form-POSTapi-forgot_password" data-method="POST" data-path="api/forgot_password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-forgot_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-forgot_password" onclick="tryItOut('POSTapi-forgot_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-forgot_password" onclick="cancelTryOut('POSTapi-forgot_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-forgot_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/forgot_password</code></b>
</p>
</form>


## api/reset_password




> Example request:

```bash
curl -X POST \
    "http://localhost/api/reset_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/reset_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-reset_password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-reset_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-reset_password"></code></pre>
</div>
<div id="execution-error-POSTapi-reset_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-reset_password"></code></pre>
</div>
<form id="form-POSTapi-reset_password" data-method="POST" data-path="api/reset_password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-reset_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-reset_password" onclick="tryItOut('POSTapi-reset_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-reset_password" onclick="cancelTryOut('POSTapi-reset_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-reset_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/reset_password</code></b>
</p>
</form>


## api/user_count




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user_count" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_count"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
5
```
<div id="execution-results-GETapi-user_count" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user_count"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user_count"></code></pre>
</div>
<div id="execution-error-GETapi-user_count" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user_count"></code></pre>
</div>
<form id="form-GETapi-user_count" data-method="GET" data-path="api/user_count" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user_count', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user_count" onclick="tryItOut('GETapi-user_count');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user_count" onclick="cancelTryOut('GETapi-user_count');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user_count" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user_count</code></b>
</p>
</form>


## api/patient_count




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/patient_count" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patient_count"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
6
```
<div id="execution-results-GETapi-patient_count" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patient_count"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patient_count"></code></pre>
</div>
<div id="execution-error-GETapi-patient_count" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patient_count"></code></pre>
</div>
<form id="form-GETapi-patient_count" data-method="GET" data-path="api/patient_count" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patient_count', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-patient_count" onclick="tryItOut('GETapi-patient_count');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-patient_count" onclick="cancelTryOut('GETapi-patient_count');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-patient_count" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patient_count</code></b>
</p>
</form>


## api/users




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Yambanso Kausiwa",
        "Role": "Admin",
        "email": "bsc-inf-07-17@unima.ac.mw",
        "email_verified_at": null,
        "created_at": "2022-03-30 21:57:04",
        "updated_at": "2022-03-30 21:57:04"
    },
    {
        "id": 2,
        "name": "Lusungu Gondwe",
        "Role": "Doctor",
        "email": "bed-com-09-17@unima.ac.mw",
        "email_verified_at": null,
        "created_at": "2022-03-30 22:24:50",
        "updated_at": "2022-03-30 22:24:50"
    },
    {
        "id": 3,
        "name": "Lab Technician",
        "Role": "Lab_Technician",
        "email": "labtechnician@user.com",
        "email_verified_at": null,
        "created_at": "2022-03-30 22:25:32",
        "updated_at": "2022-03-30 22:25:32"
    },
    {
        "id": 4,
        "name": "Pharmacist",
        "Role": "Pharmacist",
        "email": "pharmacist@user.com",
        "email_verified_at": null,
        "created_at": "2022-03-30 22:26:08",
        "updated_at": "2022-03-30 22:26:08"
    },
    {
        "id": 5,
        "name": "Receptionist",
        "Role": "Receptionist",
        "email": "Receptionist@user.com",
        "email_verified_at": null,
        "created_at": "2022-03-30 22:26:34",
        "updated_at": "2022-03-30 22:26:34"
    }
]
```
<div id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"></code></pre>
</div>
<div id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users"></code></pre>
</div>
<form id="form-GETapi-users" data-method="GET" data-path="api/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-users" onclick="tryItOut('GETapi-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-users" onclick="cancelTryOut('GETapi-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users</code></b>
</p>
</form>


## api/sign_out




> Example request:

```bash
curl -X POST \
    "http://localhost/api/sign_out" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/sign_out"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-sign_out" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-sign_out"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-sign_out"></code></pre>
</div>
<div id="execution-error-POSTapi-sign_out" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-sign_out"></code></pre>
</div>
<form id="form-POSTapi-sign_out" data-method="POST" data-path="api/sign_out" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-sign_out', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-sign_out" onclick="tryItOut('POSTapi-sign_out');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-sign_out" onclick="cancelTryOut('POSTapi-sign_out');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-sign_out" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/sign_out</code></b>
</p>
</form>


## api/user_Registration/{id}




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user_Registration/assumenda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_Registration/assumenda"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-user_Registration--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-user_Registration--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-user_Registration--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-user_Registration--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-user_Registration--id-"></code></pre>
</div>
<form id="form-PUTapi-user_Registration--id-" data-method="PUT" data-path="api/user_Registration/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-user_Registration--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-user_Registration--id-" onclick="tryItOut('PUTapi-user_Registration--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-user_Registration--id-" onclick="cancelTryOut('PUTapi-user_Registration--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-user_Registration--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/user_Registration/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-user_Registration--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/patients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-patients" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-patients"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-patients"></code></pre>
</div>
<div id="execution-error-POSTapi-patients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-patients"></code></pre>
</div>
<form id="form-POSTapi-patients" data-method="POST" data-path="api/patients" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-patients', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-patients" onclick="tryItOut('POSTapi-patients');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-patients" onclick="cancelTryOut('POSTapi-patients');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-patients" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/patients</code></b>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/patients/ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patients/ex"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-patients--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-patients--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-patients--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-patients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-patients--id-"></code></pre>
</div>
<form id="form-PUTapi-patients--id-" data-method="PUT" data-path="api/patients/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-patients--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-patients--id-" onclick="tryItOut('PUTapi-patients--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-patients--id-" onclick="cancelTryOut('PUTapi-patients--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-patients--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/patients/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-patients--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/patients/sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patients/sapiente"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-patients--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-patients--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-patients--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-patients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-patients--id-"></code></pre>
</div>
<form id="form-DELETEapi-patients--id-" data-method="DELETE" data-path="api/patients/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-patients--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-patients--id-" onclick="tryItOut('DELETEapi-patients--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-patients--id-" onclick="cancelTryOut('DELETEapi-patients--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-patients--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/patients/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-patients--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/Services" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Services"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-Services" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-Services"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-Services"></code></pre>
</div>
<div id="execution-error-POSTapi-Services" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-Services"></code></pre>
</div>
<form id="form-POSTapi-Services" data-method="POST" data-path="api/Services" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-Services', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-Services" onclick="tryItOut('POSTapi-Services');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-Services" onclick="cancelTryOut('POSTapi-Services');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-Services" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/Services</code></b>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/Services/recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Services/recusandae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-Services--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-Services--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-Services--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-Services--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-Services--id-"></code></pre>
</div>
<form id="form-PUTapi-Services--id-" data-method="PUT" data-path="api/Services/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-Services--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-Services--id-" onclick="tryItOut('PUTapi-Services--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-Services--id-" onclick="cancelTryOut('PUTapi-Services--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-Services--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/Services/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-Services--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/Services/omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Services/omnis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-Services--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-Services--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-Services--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-Services--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-Services--id-"></code></pre>
</div>
<form id="form-DELETEapi-Services--id-" data-method="DELETE" data-path="api/Services/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-Services--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-Services--id-" onclick="tryItOut('DELETEapi-Services--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-Services--id-" onclick="cancelTryOut('DELETEapi-Services--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-Services--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/Services/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-Services--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/Medication" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Medication"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-Medication" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-Medication"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-Medication"></code></pre>
</div>
<div id="execution-error-POSTapi-Medication" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-Medication"></code></pre>
</div>
<form id="form-POSTapi-Medication" data-method="POST" data-path="api/Medication" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-Medication', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-Medication" onclick="tryItOut('POSTapi-Medication');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-Medication" onclick="cancelTryOut('POSTapi-Medication');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-Medication" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/Medication</code></b>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/Medication/consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Medication/consequatur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-Medication--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-Medication--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-Medication--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-Medication--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-Medication--id-"></code></pre>
</div>
<form id="form-PUTapi-Medication--id-" data-method="PUT" data-path="api/Medication/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-Medication--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-Medication--id-" onclick="tryItOut('PUTapi-Medication--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-Medication--id-" onclick="cancelTryOut('PUTapi-Medication--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-Medication--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/Medication/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-Medication--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/Medication/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Medication/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-Medication--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-Medication--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-Medication--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-Medication--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-Medication--id-"></code></pre>
</div>
<form id="form-DELETEapi-Medication--id-" data-method="DELETE" data-path="api/Medication/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-Medication--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-Medication--id-" onclick="tryItOut('DELETEapi-Medication--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-Medication--id-" onclick="cancelTryOut('DELETEapi-Medication--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-Medication--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/Medication/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-Medication--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/Visitation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-Visitation" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-Visitation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-Visitation"></code></pre>
</div>
<div id="execution-error-POSTapi-Visitation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-Visitation"></code></pre>
</div>
<form id="form-POSTapi-Visitation" data-method="POST" data-path="api/Visitation" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-Visitation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-Visitation" onclick="tryItOut('POSTapi-Visitation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-Visitation" onclick="cancelTryOut('POSTapi-Visitation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-Visitation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/Visitation</code></b>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/Visitation/repudiandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation/repudiandae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-Visitation--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-Visitation--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-Visitation--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-Visitation--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-Visitation--id-"></code></pre>
</div>
<form id="form-PUTapi-Visitation--id-" data-method="PUT" data-path="api/Visitation/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-Visitation--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-Visitation--id-" onclick="tryItOut('PUTapi-Visitation--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-Visitation--id-" onclick="cancelTryOut('PUTapi-Visitation--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-Visitation--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/Visitation/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-Visitation--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/Visitation_prescription" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation_prescription"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-Visitation_prescription" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-Visitation_prescription"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-Visitation_prescription"></code></pre>
</div>
<div id="execution-error-POSTapi-Visitation_prescription" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-Visitation_prescription"></code></pre>
</div>
<form id="form-POSTapi-Visitation_prescription" data-method="POST" data-path="api/Visitation_prescription" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-Visitation_prescription', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-Visitation_prescription" onclick="tryItOut('POSTapi-Visitation_prescription');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-Visitation_prescription" onclick="cancelTryOut('POSTapi-Visitation_prescription');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-Visitation_prescription" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/Visitation_prescription</code></b>
</p>
</form>


## api/Visitation_prescriptions




> Example request:

```bash
curl -X POST \
    "http://localhost/api/Visitation_prescriptions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation_prescriptions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-Visitation_prescriptions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-Visitation_prescriptions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-Visitation_prescriptions"></code></pre>
</div>
<div id="execution-error-POSTapi-Visitation_prescriptions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-Visitation_prescriptions"></code></pre>
</div>
<form id="form-POSTapi-Visitation_prescriptions" data-method="POST" data-path="api/Visitation_prescriptions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-Visitation_prescriptions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-Visitation_prescriptions" onclick="tryItOut('POSTapi-Visitation_prescriptions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-Visitation_prescriptions" onclick="cancelTryOut('POSTapi-Visitation_prescriptions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-Visitation_prescriptions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/Visitation_prescriptions</code></b>
</p>
</form>


## api/Visitation_prescriptions




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/Visitation_prescriptions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation_prescriptions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-Visitation_prescriptions" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-Visitation_prescriptions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-Visitation_prescriptions"></code></pre>
</div>
<div id="execution-error-PUTapi-Visitation_prescriptions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-Visitation_prescriptions"></code></pre>
</div>
<form id="form-PUTapi-Visitation_prescriptions" data-method="PUT" data-path="api/Visitation_prescriptions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-Visitation_prescriptions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-Visitation_prescriptions" onclick="tryItOut('PUTapi-Visitation_prescriptions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-Visitation_prescriptions" onclick="cancelTryOut('PUTapi-Visitation_prescriptions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-Visitation_prescriptions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/Visitation_prescriptions</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/ServicesOffered" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/ServicesOffered"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-ServicesOffered" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-ServicesOffered"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-ServicesOffered"></code></pre>
</div>
<div id="execution-error-POSTapi-ServicesOffered" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-ServicesOffered"></code></pre>
</div>
<form id="form-POSTapi-ServicesOffered" data-method="POST" data-path="api/ServicesOffered" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-ServicesOffered', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-ServicesOffered" onclick="tryItOut('POSTapi-ServicesOffered');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-ServicesOffered" onclick="cancelTryOut('POSTapi-ServicesOffered');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-ServicesOffered" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/ServicesOffered</code></b>
</p>
</form>


## api/Visitation_pivot/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Visitation_pivot/sequi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation_pivot/sequi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-Visitation_pivot--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Visitation_pivot--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Visitation_pivot--id-"></code></pre>
</div>
<div id="execution-error-GETapi-Visitation_pivot--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Visitation_pivot--id-"></code></pre>
</div>
<form id="form-GETapi-Visitation_pivot--id-" data-method="GET" data-path="api/Visitation_pivot/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Visitation_pivot--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Visitation_pivot--id-" onclick="tryItOut('GETapi-Visitation_pivot--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Visitation_pivot--id-" onclick="cancelTryOut('GETapi-Visitation_pivot--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Visitation_pivot--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Visitation_pivot/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-Visitation_pivot--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/patients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 5737,
        "firstname": "Thomas",
        "surname": "James",
        "Gender": "Male",
        "Phonenumber": "+265 888 545 709",
        "next_of_kin_contact": "+265 999 039 753",
        "blood_group": "O",
        "Medical_scheme": "Blue Star",
        "Dob": "1966-03-15",
        "address": "Chikanda | Zomba",
        "created_at": "2022-03-30 22:19:10",
        "updated_at": "2022-03-30 22:19:10"
    },
    {
        "id": 18997,
        "firstname": "Fatsani",
        "surname": "Byson",
        "Gender": "Male",
        "Phonenumber": "+265 888 626 062",
        "next_of_kin_contact": "+265 996 364 280",
        "blood_group": "B",
        "Medical_scheme": "Unimed",
        "Dob": "2011-02-01",
        "address": "Chikanda | Zomba",
        "created_at": "2022-04-01 12:52:34",
        "updated_at": "2022-04-01 12:52:34"
    },
    {
        "id": 23903,
        "firstname": "Gladys",
        "surname": "Pemphero",
        "Gender": "Female",
        "Phonenumber": "+265 888 626 062",
        "next_of_kin_contact": "+265 999 911 240",
        "blood_group": "AB",
        "Medical_scheme": "Masm",
        "Dob": "1973-11-18",
        "address": "Kameza | Blanytre",
        "created_at": "2022-03-30 22:18:05",
        "updated_at": "2022-03-30 22:18:05"
    },
    {
        "id": 37095,
        "firstname": "Clifton",
        "surname": "Magalasi",
        "Gender": "Male",
        "Phonenumber": "+265 994 734 897",
        "next_of_kin_contact": "+265 996 364 280",
        "blood_group": "A",
        "Medical_scheme": "Unimed",
        "Dob": "1998-04-26",
        "address": "Namiwawa | Blantyre",
        "created_at": "2022-03-30 22:21:44",
        "updated_at": "2022-03-30 22:21:44"
    },
    {
        "id": 39056,
        "firstname": "Wezzie",
        "surname": "Munthali",
        "Gender": "Female",
        "Phonenumber": "+265 994 734 897",
        "next_of_kin_contact": "+265 996 364 280",
        "blood_group": "O",
        "Medical_scheme": "Blue Star",
        "Dob": "1997-09-05",
        "address": "Area 25 c | Lilongwe",
        "created_at": "2022-04-05 18:18:39",
        "updated_at": "2022-04-05 18:18:39"
    },
    {
        "id": 77926,
        "firstname": "Pemphero",
        "surname": "Malili",
        "Gender": "Female",
        "Phonenumber": "+265 884 398 409",
        "next_of_kin_contact": "+265 995 578 532",
        "blood_group": "B",
        "Medical_scheme": "Masm",
        "Dob": "1977-04-07",
        "address": "Area 23 | Lilongwe",
        "created_at": "2022-03-30 22:20:22",
        "updated_at": "2022-03-30 22:20:22"
    }
]
```
<div id="execution-results-GETapi-patients" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patients"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patients"></code></pre>
</div>
<div id="execution-error-GETapi-patients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patients"></code></pre>
</div>
<form id="form-GETapi-patients" data-method="GET" data-path="api/patients" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patients', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-patients" onclick="tryItOut('GETapi-patients');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-patients" onclick="cancelTryOut('GETapi-patients');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-patients" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patients</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/patients/corporis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patients/corporis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-patients--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patients--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patients--id-"></code></pre>
</div>
<div id="execution-error-GETapi-patients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patients--id-"></code></pre>
</div>
<form id="form-GETapi-patients--id-" data-method="GET" data-path="api/patients/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patients--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-patients--id-" onclick="tryItOut('GETapi-patients--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-patients--id-" onclick="cancelTryOut('GETapi-patients--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-patients--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patients/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-patients--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/patients/search/{name}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/patients/search/magnam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patients/search/magnam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-patients-search--name-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patients-search--name-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patients-search--name-"></code></pre>
</div>
<div id="execution-error-GETapi-patients-search--name-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patients-search--name-"></code></pre>
</div>
<form id="form-GETapi-patients-search--name-" data-method="GET" data-path="api/patients/search/{name}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patients-search--name-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-patients-search--name-" onclick="tryItOut('GETapi-patients-search--name-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-patients-search--name-" onclick="cancelTryOut('GETapi-patients-search--name-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-patients-search--name-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patients/search/{name}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="GETapi-patients-search--name-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Services" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Services"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Consultation",
        "Price": "5000.0",
        "created_at": "2022-03-30 21:57:46",
        "updated_at": "2022-03-30 21:57:46"
    },
    {
        "id": 2,
        "name": "Laboratory",
        "Price": "7000.0",
        "created_at": "2022-03-30 21:58:07",
        "updated_at": "2022-03-30 21:58:07"
    }
]
```
<div id="execution-results-GETapi-Services" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Services"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Services"></code></pre>
</div>
<div id="execution-error-GETapi-Services" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Services"></code></pre>
</div>
<form id="form-GETapi-Services" data-method="GET" data-path="api/Services" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Services', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Services" onclick="tryItOut('GETapi-Services');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Services" onclick="cancelTryOut('GETapi-Services');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Services" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Services</code></b>
</p>
</form>


## api/Visitation_Services/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Visitation_Services/sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation_Services/sit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Call to a member function Services() on null",
    "exception": "Symfony\\Component\\Debug\\Exception\\FatalThrowableError",
    "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\app\\Http\\Controllers\\VisitationController.php",
    "line": 149,
    "trace": [
        {
            "function": "Services",
            "class": "App\\Http\\Controllers\\VisitationController",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 219,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 176,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 681,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 33,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Laravel\\Sanctum\\Http\\Middleware\\{closure}",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 34,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 683,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 658,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 624,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 613,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 170,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\app\\Http\\Middleware\\Cors.php",
            "line": 18,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 145,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 32,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 90,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 34,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 590,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Application.php",
            "line": 1009,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Application.php",
            "line": 273,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Application.php",
            "line": 149,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 131,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-Visitation_Services--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Visitation_Services--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Visitation_Services--id-"></code></pre>
</div>
<div id="execution-error-GETapi-Visitation_Services--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Visitation_Services--id-"></code></pre>
</div>
<form id="form-GETapi-Visitation_Services--id-" data-method="GET" data-path="api/Visitation_Services/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Visitation_Services--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Visitation_Services--id-" onclick="tryItOut('GETapi-Visitation_Services--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Visitation_Services--id-" onclick="cancelTryOut('GETapi-Visitation_Services--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Visitation_Services--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Visitation_Services/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-Visitation_Services--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/Visitation/Administer/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Visitation/Administer/culpa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation/Administer/culpa"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-Visitation-Administer--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Visitation-Administer--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Visitation-Administer--id-"></code></pre>
</div>
<div id="execution-error-GETapi-Visitation-Administer--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Visitation-Administer--id-"></code></pre>
</div>
<form id="form-GETapi-Visitation-Administer--id-" data-method="GET" data-path="api/Visitation/Administer/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Visitation-Administer--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Visitation-Administer--id-" onclick="tryItOut('GETapi-Visitation-Administer--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Visitation-Administer--id-" onclick="cancelTryOut('GETapi-Visitation-Administer--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Visitation-Administer--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Visitation/Administer/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-Visitation-Administer--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## this joins the prescription table with the medication table on medication.id and prescriptions.medications_id




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Prescription" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Prescription"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "visitation_id": "1",
        "name": "Aspirin",
        "Price": "500.0"
    },
    {
        "id": 2,
        "visitation_id": "1",
        "name": "Multi vitamin",
        "Price": "900.0"
    },
    {
        "id": 3,
        "visitation_id": "1",
        "name": "Zinc",
        "Price": "670.0"
    },
    {
        "id": 4,
        "visitation_id": "1",
        "name": "Amoxicilin",
        "Price": "1000.0"
    },
    {
        "id": 5,
        "visitation_id": "3",
        "name": "Panado",
        "Price": "540.0"
    },
    {
        "id": 6,
        "visitation_id": "3",
        "name": "Multi vitamin",
        "Price": "900.0"
    },
    {
        "id": 7,
        "visitation_id": "3",
        "name": "Zinc",
        "Price": "670.0"
    },
    {
        "id": 8,
        "visitation_id": "3",
        "name": "Ibrupfen",
        "Price": "800.0"
    },
    {
        "id": 9,
        "visitation_id": "4",
        "name": "Aspirin",
        "Price": "500.0"
    },
    {
        "id": 10,
        "visitation_id": "4",
        "name": "Multi vitamin",
        "Price": "900.0"
    },
    {
        "id": 11,
        "visitation_id": "4",
        "name": "Amoxicilin",
        "Price": "1000.0"
    },
    {
        "id": 12,
        "visitation_id": "6",
        "name": "Aspirin",
        "Price": "500.0"
    },
    {
        "id": 13,
        "visitation_id": "6",
        "name": "Multi vitamin",
        "Price": "900.0"
    },
    {
        "id": 14,
        "visitation_id": "6",
        "name": "Zinc",
        "Price": "670.0"
    },
    {
        "id": 15,
        "visitation_id": "6",
        "name": "Ibrupfen",
        "Price": "800.0"
    },
    {
        "id": 16,
        "visitation_id": "7",
        "name": "Aspirin",
        "Price": "500.0"
    },
    {
        "id": 17,
        "visitation_id": "7",
        "name": "Multi vitamin",
        "Price": "900.0"
    },
    {
        "id": 18,
        "visitation_id": "7",
        "name": "Zinc",
        "Price": "670.0"
    },
    {
        "id": 19,
        "visitation_id": "7",
        "name": "Amoxicilin",
        "Price": "1000.0"
    },
    {
        "id": 20,
        "visitation_id": "5",
        "name": "Queinien",
        "Price": "3000.0"
    },
    {
        "id": 21,
        "visitation_id": "5",
        "name": "Aspirin",
        "Price": "500.0"
    },
    {
        "id": 22,
        "visitation_id": "5",
        "name": "Multi vitamin",
        "Price": "900.0"
    },
    {
        "id": 23,
        "visitation_id": "2",
        "name": "Queinien",
        "Price": "3000.0"
    },
    {
        "id": 24,
        "visitation_id": "2",
        "name": "Aspirin",
        "Price": "500.0"
    },
    {
        "id": 25,
        "visitation_id": "2",
        "name": "Multi vitamin",
        "Price": "900.0"
    },
    {
        "id": 26,
        "visitation_id": "8",
        "name": "Queinien",
        "Price": "3000.0"
    },
    {
        "id": 27,
        "visitation_id": "8",
        "name": "Aspirin",
        "Price": "500.0"
    },
    {
        "id": 28,
        "visitation_id": "9",
        "name": "Aspirin",
        "Price": "500.0"
    },
    {
        "id": 29,
        "visitation_id": "9",
        "name": "Multi vitamin",
        "Price": "900.0"
    },
    {
        "id": 30,
        "visitation_id": "9",
        "name": "Amoxicilin",
        "Price": "1000.0"
    },
    {
        "id": 31,
        "visitation_id": "10",
        "name": "Aspirin",
        "Price": "500.0"
    },
    {
        "id": 32,
        "visitation_id": "10",
        "name": "Amoxicilin",
        "Price": "1000.0"
    }
]
```
<div id="execution-results-GETapi-Prescription" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Prescription"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Prescription"></code></pre>
</div>
<div id="execution-error-GETapi-Prescription" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Prescription"></code></pre>
</div>
<form id="form-GETapi-Prescription" data-method="GET" data-path="api/Prescription" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Prescription', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Prescription" onclick="tryItOut('GETapi-Prescription');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Prescription" onclick="cancelTryOut('GETapi-Prescription');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Prescription" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Prescription</code></b>
</p>
</form>


## api/Visitation/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Visitation/illum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation/illum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Trying to get property 'Visitation' of non-object",
    "exception": "ErrorException",
    "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\app\\Http\\Controllers\\PatientsController.php",
    "line": 95,
    "trace": [
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\app\\Http\\Controllers\\PatientsController.php",
            "line": 95,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "->"
        },
        {
            "function": "visits",
            "class": "App\\Http\\Controllers\\PatientsController",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 219,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 176,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 681,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 33,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Laravel\\Sanctum\\Http\\Middleware\\{closure}",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 34,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 683,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 658,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 624,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 613,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 170,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\app\\Http\\Middleware\\Cors.php",
            "line": 18,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 145,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 32,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 90,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 34,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 590,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Application.php",
            "line": 1009,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Application.php",
            "line": 273,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Application.php",
            "line": 149,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 131,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-Visitation--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Visitation--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Visitation--id-"></code></pre>
</div>
<div id="execution-error-GETapi-Visitation--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Visitation--id-"></code></pre>
</div>
<form id="form-GETapi-Visitation--id-" data-method="GET" data-path="api/Visitation/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Visitation--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Visitation--id-" onclick="tryItOut('GETapi-Visitation--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Visitation--id-" onclick="cancelTryOut('GETapi-Visitation--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Visitation--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Visitation/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-Visitation--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Visitation_Prescription/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation_Prescription/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Call to a member function Medication() on null",
    "exception": "Symfony\\Component\\Debug\\Exception\\FatalThrowableError",
    "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\app\\Http\\Controllers\\VisitationController.php",
    "line": 143,
    "trace": [
        {
            "function": "prescription",
            "class": "App\\Http\\Controllers\\VisitationController",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 219,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 176,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 681,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 33,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Laravel\\Sanctum\\Http\\Middleware\\{closure}",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 34,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 683,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 658,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 624,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 613,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 170,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\app\\Http\\Middleware\\Cors.php",
            "line": 18,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 145,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 32,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 90,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 34,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 590,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Application.php",
            "line": 1009,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Application.php",
            "line": 273,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\symfony\\console\\Application.php",
            "line": 149,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 131,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\2.0\\Documents\\D4\\COM422\\Project\\Api\\HMS\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-Visitation_Prescription--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Visitation_Prescription--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Visitation_Prescription--id-"></code></pre>
</div>
<div id="execution-error-GETapi-Visitation_Prescription--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Visitation_Prescription--id-"></code></pre>
</div>
<form id="form-GETapi-Visitation_Prescription--id-" data-method="GET" data-path="api/Visitation_Prescription/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Visitation_Prescription--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Visitation_Prescription--id-" onclick="tryItOut('GETapi-Visitation_Prescription--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Visitation_Prescription--id-" onclick="cancelTryOut('GETapi-Visitation_Prescription--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Visitation_Prescription--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Visitation_Prescription/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-Visitation_Prescription--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/active_visits/{status}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/active_visits/unde" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/active_visits/unde"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-active_visits--status-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-active_visits--status-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-active_visits--status-"></code></pre>
</div>
<div id="execution-error-GETapi-active_visits--status-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-active_visits--status-"></code></pre>
</div>
<form id="form-GETapi-active_visits--status-" data-method="GET" data-path="api/active_visits/{status}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-active_visits--status-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-active_visits--status-" onclick="tryItOut('GETapi-active_visits--status-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-active_visits--status-" onclick="cancelTryOut('GETapi-active_visits--status-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-active_visits--status-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/active_visits/{status}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="status" data-endpoint="GETapi-active_visits--status-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/Visitation_without_Prescription




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Visitation_without_Prescription" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation_without_Prescription"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-Visitation_without_Prescription" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Visitation_without_Prescription"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Visitation_without_Prescription"></code></pre>
</div>
<div id="execution-error-GETapi-Visitation_without_Prescription" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Visitation_without_Prescription"></code></pre>
</div>
<form id="form-GETapi-Visitation_without_Prescription" data-method="GET" data-path="api/Visitation_without_Prescription" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Visitation_without_Prescription', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Visitation_without_Prescription" onclick="tryItOut('GETapi-Visitation_without_Prescription');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Visitation_without_Prescription" onclick="cancelTryOut('GETapi-Visitation_without_Prescription');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Visitation_without_Prescription" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Visitation_without_Prescription</code></b>
</p>
</form>


## api/Visitation_without_Results




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Visitation_without_Results" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation_without_Results"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-Visitation_without_Results" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Visitation_without_Results"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Visitation_without_Results"></code></pre>
</div>
<div id="execution-error-GETapi-Visitation_without_Results" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Visitation_without_Results"></code></pre>
</div>
<form id="form-GETapi-Visitation_without_Results" data-method="GET" data-path="api/Visitation_without_Results" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Visitation_without_Results', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Visitation_without_Results" onclick="tryItOut('GETapi-Visitation_without_Results');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Visitation_without_Results" onclick="cancelTryOut('GETapi-Visitation_without_Results');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Visitation_without_Results" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Visitation_without_Results</code></b>
</p>
</form>


## api/lab_test_orders




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/lab_test_orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/lab_test_orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-lab_test_orders" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-lab_test_orders"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-lab_test_orders"></code></pre>
</div>
<div id="execution-error-GETapi-lab_test_orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-lab_test_orders"></code></pre>
</div>
<form id="form-GETapi-lab_test_orders" data-method="GET" data-path="api/lab_test_orders" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-lab_test_orders', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-lab_test_orders" onclick="tryItOut('GETapi-lab_test_orders');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-lab_test_orders" onclick="cancelTryOut('GETapi-lab_test_orders');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-lab_test_orders" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/lab_test_orders</code></b>
</p>
</form>


## api/Visitation_today/{patient_id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Visitation_today/praesentium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation_today/praesentium"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-Visitation_today--patient_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Visitation_today--patient_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Visitation_today--patient_id-"></code></pre>
</div>
<div id="execution-error-GETapi-Visitation_today--patient_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Visitation_today--patient_id-"></code></pre>
</div>
<form id="form-GETapi-Visitation_today--patient_id-" data-method="GET" data-path="api/Visitation_today/{patient_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Visitation_today--patient_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Visitation_today--patient_id-" onclick="tryItOut('GETapi-Visitation_today--patient_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Visitation_today--patient_id-" onclick="cancelTryOut('GETapi-Visitation_today--patient_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Visitation_today--patient_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Visitation_today/{patient_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>patient_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patient_id" data-endpoint="GETapi-Visitation_today--patient_id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the all visitations




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Visitation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Visitation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "patient_id": "5737",
        "user_id": "2",
        "Description": "Head ache\nFever\nCough",
        "Test_Order": null,
        "Status": "Complete",
        "lab_results": null,
        "visit_day": "30-03-22",
        "created_at": "2022-03-30 22:30:58",
        "updated_at": "2022-03-30 22:43:16"
    },
    {
        "id": 2,
        "patient_id": "23903",
        "user_id": "2",
        "Description": "Loss of Appetite\nheadaches\nvomiting\nfever\nloss of appetite",
        "Test_Order": "Malaria and Blood pressure",
        "Status": "Complete",
        "lab_results": "Malaria : Positive\nBlood Pressure : Normal",
        "visit_day": "30-03-22",
        "created_at": "2022-03-30 22:32:23",
        "updated_at": "2022-03-30 22:43:25"
    },
    {
        "id": 3,
        "patient_id": "23903",
        "user_id": "2",
        "Description": "Vomiting\nDizzines\nbody ache",
        "Test_Order": null,
        "Status": "Complete",
        "lab_results": null,
        "visit_day": "30-03-22",
        "created_at": "2022-03-30 22:32:59",
        "updated_at": "2022-03-30 22:43:36"
    },
    {
        "id": 4,
        "patient_id": "37095",
        "user_id": "2",
        "Description": "fever \nCoughing\nStomachache",
        "Test_Order": null,
        "Status": "Complete",
        "lab_results": null,
        "visit_day": "30-03-22",
        "created_at": "2022-03-30 22:33:54",
        "updated_at": "2022-03-30 22:43:47"
    },
    {
        "id": 5,
        "patient_id": "37095",
        "user_id": "2",
        "Description": "Loss of appetite\nVomiting\nfever\nheadache",
        "Test_Order": "Malaria",
        "Status": "Complete",
        "lab_results": "Malaria : Positive",
        "visit_day": "30-03-22",
        "created_at": "2022-03-30 22:35:25",
        "updated_at": "2022-03-30 22:43:56"
    },
    {
        "id": 6,
        "patient_id": "77926",
        "user_id": "2",
        "Description": "Headache\nDiorrhoea",
        "Test_Order": null,
        "Status": "Complete",
        "lab_results": null,
        "visit_day": "30-03-22",
        "created_at": "2022-03-30 22:36:29",
        "updated_at": "2022-03-30 22:44:04"
    },
    {
        "id": 7,
        "patient_id": "77926",
        "user_id": "2",
        "Description": "fever\nDizziness\nheadache\nloss of appetite",
        "Test_Order": "Malaria",
        "Status": "Complete",
        "lab_results": "Malaria : negative\nWhite blood Cell Count : high",
        "visit_day": "30-03-22",
        "created_at": "2022-03-30 22:37:10",
        "updated_at": "2022-03-30 22:43:03"
    },
    {
        "id": 8,
        "patient_id": "18997",
        "user_id": "2",
        "Description": "fever\nloss of apetite\nvomiting",
        "Test_Order": "Malaria",
        "Status": "Complete",
        "lab_results": "Malaria : positive",
        "visit_day": "01-04-22",
        "created_at": "2022-04-01 12:53:27",
        "updated_at": "2022-04-01 12:55:38"
    },
    {
        "id": 9,
        "patient_id": "39056",
        "user_id": "2",
        "Description": "Fever\nHeadache\nloss of appetite",
        "Test_Order": "Malaria",
        "Status": "Complete",
        "lab_results": "Malaria : Negative",
        "visit_day": "05-04-22",
        "created_at": "2022-04-05 18:22:29",
        "updated_at": "2022-04-05 18:24:48"
    },
    {
        "id": 10,
        "patient_id": "77926",
        "user_id": "2",
        "Description": "fever\nHeadache",
        "Test_Order": null,
        "Status": "Complete",
        "lab_results": null,
        "visit_day": "05-04-22",
        "created_at": "2022-04-05 18:32:22",
        "updated_at": "2022-04-05 18:33:21"
    }
]
```
<div id="execution-results-GETapi-Visitation" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Visitation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Visitation"></code></pre>
</div>
<div id="execution-error-GETapi-Visitation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Visitation"></code></pre>
</div>
<form id="form-GETapi-Visitation" data-method="GET" data-path="api/Visitation" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Visitation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Visitation" onclick="tryItOut('GETapi-Visitation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Visitation" onclick="cancelTryOut('GETapi-Visitation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Visitation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Visitation</code></b>
</p>
</form>


## api/Medication/search/{name}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Medication/search/eius" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Medication/search/eius"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-Medication-search--name-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Medication-search--name-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Medication-search--name-"></code></pre>
</div>
<div id="execution-error-GETapi-Medication-search--name-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Medication-search--name-"></code></pre>
</div>
<form id="form-GETapi-Medication-search--name-" data-method="GET" data-path="api/Medication/search/{name}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Medication-search--name-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Medication-search--name-" onclick="tryItOut('GETapi-Medication-search--name-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Medication-search--name-" onclick="cancelTryOut('GETapi-Medication-search--name-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Medication-search--name-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Medication/search/{name}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="GETapi-Medication-search--name-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Medication" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Medication"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Queinien",
        "Type": "Anti Biotics",
        "Price": "3000.0",
        "created_at": "2022-03-30 22:15:32",
        "updated_at": "2022-03-30 22:15:32"
    },
    {
        "id": 2,
        "name": "Aspirin",
        "Type": "Pain killers",
        "Price": "500.0",
        "created_at": "2022-03-30 22:15:50",
        "updated_at": "2022-03-30 22:15:50"
    },
    {
        "id": 3,
        "name": "Panado",
        "Type": "Pain killers",
        "Price": "540.0",
        "created_at": "2022-03-30 22:16:03",
        "updated_at": "2022-03-30 22:16:03"
    },
    {
        "id": 4,
        "name": "Multi vitamin",
        "Type": "Vitamins",
        "Price": "900.0",
        "created_at": "2022-03-30 22:16:19",
        "updated_at": "2022-03-30 22:16:19"
    },
    {
        "id": 5,
        "name": "Zinc",
        "Type": "Minerals",
        "Price": "670.0",
        "created_at": "2022-03-30 22:16:31",
        "updated_at": "2022-03-30 22:16:31"
    },
    {
        "id": 6,
        "name": "Ibrupfen",
        "Type": "Anti Biotics",
        "Price": "800.0",
        "created_at": "2022-03-30 22:16:48",
        "updated_at": "2022-03-30 22:16:48"
    },
    {
        "id": 7,
        "name": "Amoxicilin",
        "Type": "Anti Biotics",
        "Price": "1000.0",
        "created_at": "2022-03-30 22:17:01",
        "updated_at": "2022-03-30 22:17:01"
    },
    {
        "id": 8,
        "name": "Coartem",
        "Type": "Minerals",
        "Price": "2000.0",
        "created_at": "2022-04-05 18:21:50",
        "updated_at": "2022-04-05 18:21:50"
    }
]
```
<div id="execution-results-GETapi-Medication" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Medication"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Medication"></code></pre>
</div>
<div id="execution-error-GETapi-Medication" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Medication"></code></pre>
</div>
<form id="form-GETapi-Medication" data-method="GET" data-path="api/Medication" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Medication', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Medication" onclick="tryItOut('GETapi-Medication');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Medication" onclick="cancelTryOut('GETapi-Medication');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Medication" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Medication</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Services/quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Services/quis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-Services--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Services--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Services--id-"></code></pre>
</div>
<div id="execution-error-GETapi-Services--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Services--id-"></code></pre>
</div>
<form id="form-GETapi-Services--id-" data-method="GET" data-path="api/Services/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Services--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Services--id-" onclick="tryItOut('GETapi-Services--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Services--id-" onclick="cancelTryOut('GETapi-Services--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Services--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Services/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-Services--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/Services/search/{name}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Services/search/ullam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Services/search/ullam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-Services-search--name-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Services-search--name-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Services-search--name-"></code></pre>
</div>
<div id="execution-error-GETapi-Services-search--name-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Services-search--name-"></code></pre>
</div>
<form id="form-GETapi-Services-search--name-" data-method="GET" data-path="api/Services/search/{name}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Services-search--name-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Services-search--name-" onclick="tryItOut('GETapi-Services-search--name-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Services-search--name-" onclick="cancelTryOut('GETapi-Services-search--name-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Services-search--name-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Services/search/{name}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="GETapi-Services-search--name-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/report/{time}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/report/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/report/molestiae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "message": "no time preiod passed"
}
```
<div id="execution-results-GETapi-report--time-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-report--time-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-report--time-"></code></pre>
</div>
<div id="execution-error-GETapi-report--time-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-report--time-"></code></pre>
</div>
<form id="form-GETapi-report--time-" data-method="GET" data-path="api/report/{time}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-report--time-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-report--time-" onclick="tryItOut('GETapi-report--time-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-report--time-" onclick="cancelTryOut('GETapi-report--time-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-report--time-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/report/{time}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="time" data-endpoint="GETapi-report--time-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display monthly Diagoniss report




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/Diagnosis/veniam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Diagnosis/veniam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "message": "no time preiod passed"
}
```
<div id="execution-results-GETapi-Diagnosis--time-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-Diagnosis--time-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-Diagnosis--time-"></code></pre>
</div>
<div id="execution-error-GETapi-Diagnosis--time-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-Diagnosis--time-"></code></pre>
</div>
<form id="form-GETapi-Diagnosis--time-" data-method="GET" data-path="api/Diagnosis/{time}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-Diagnosis--time-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-Diagnosis--time-" onclick="tryItOut('GETapi-Diagnosis--time-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-Diagnosis--time-" onclick="cancelTryOut('GETapi-Diagnosis--time-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-Diagnosis--time-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/Diagnosis/{time}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="time" data-endpoint="GETapi-Diagnosis--time-" data-component="url" required  hidden>
<br>

</p>
</form>


## Dispaly all the resource from storage that meet the conditions specified in the query




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/reportMonthlyMeds/magni" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/reportMonthlyMeds/magni"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "message": "no time preiod passed"
}
```
<div id="execution-results-GETapi-reportMonthlyMeds--time-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-reportMonthlyMeds--time-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-reportMonthlyMeds--time-"></code></pre>
</div>
<div id="execution-error-GETapi-reportMonthlyMeds--time-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-reportMonthlyMeds--time-"></code></pre>
</div>
<form id="form-GETapi-reportMonthlyMeds--time-" data-method="GET" data-path="api/reportMonthlyMeds/{time}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-reportMonthlyMeds--time-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-reportMonthlyMeds--time-" onclick="tryItOut('GETapi-reportMonthlyMeds--time-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-reportMonthlyMeds--time-" onclick="cancelTryOut('GETapi-reportMonthlyMeds--time-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-reportMonthlyMeds--time-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/reportMonthlyMeds/{time}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="time" data-endpoint="GETapi-reportMonthlyMeds--time-" data-component="url" required  hidden>
<br>

</p>
</form>


## Dispaly all the resource from storage that meet the conditions specified in the query




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/reportMonthlyMedsUnPrescribed/neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/reportMonthlyMedsUnPrescribed/neque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "message": "no time preiod passed"
}
```
<div id="execution-results-GETapi-reportMonthlyMedsUnPrescribed--time-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-reportMonthlyMedsUnPrescribed--time-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-reportMonthlyMedsUnPrescribed--time-"></code></pre>
</div>
<div id="execution-error-GETapi-reportMonthlyMedsUnPrescribed--time-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-reportMonthlyMedsUnPrescribed--time-"></code></pre>
</div>
<form id="form-GETapi-reportMonthlyMedsUnPrescribed--time-" data-method="GET" data-path="api/reportMonthlyMedsUnPrescribed/{time}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-reportMonthlyMedsUnPrescribed--time-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-reportMonthlyMedsUnPrescribed--time-" onclick="tryItOut('GETapi-reportMonthlyMedsUnPrescribed--time-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-reportMonthlyMedsUnPrescribed--time-" onclick="cancelTryOut('GETapi-reportMonthlyMedsUnPrescribed--time-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-reportMonthlyMedsUnPrescribed--time-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/reportMonthlyMedsUnPrescribed/{time}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="time" data-endpoint="GETapi-reportMonthlyMedsUnPrescribed--time-" data-component="url" required  hidden>
<br>

</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>


## Invoke the controller method.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/forgot_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/forgot_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Starter</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #f1f1f1;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        input {
            padding: 10pt;
            width: 60%;
            font-size: 15pt;
            border-radius: 5pt;
            border: 1px solid lightgray;
            margin: 10pt;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            width: 60%;
            align-items: center;
            margin: 20pt;
            border: 1px solid lightgray;
            padding: 20pt;
            border-radius: 5pt;
            background: white;
        }
        button {
            border-radius: 5pt;
            padding: 10pt 14pt;
            background: white;
            border: 1px solid gray;
            font-size: 14pt;
            margin: 20pt;
        }
        button:hover {
            background: lightgray;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <form class="form-container" action="api/reset_password" method="POST">
        <h2>Forgot Password?</h2>

        <input name="email" placeholder="Enter email" value="">
        <input name="password" placeholder="Enter new password">
        <input name="password_confirmation" placeholder="Confirm new password">
        <input hidden name="token" placeholder="token" value="">

        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>

```
<div id="execution-results-GETforgot_password" hidden>
    <blockquote>Received response<span id="execution-response-status-GETforgot_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETforgot_password"></code></pre>
</div>
<div id="execution-error-GETforgot_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETforgot_password"></code></pre>
</div>
<form id="form-GETforgot_password" data-method="GET" data-path="forgot_password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETforgot_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETforgot_password" onclick="tryItOut('GETforgot_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETforgot_password" onclick="cancelTryOut('GETforgot_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETforgot_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>forgot_password</code></b>
</p>
</form>



