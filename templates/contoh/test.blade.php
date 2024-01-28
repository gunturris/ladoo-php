
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
  <script src="https://unpkg.com/htmx.org"></script>
  <script src="https://unpkg.com/htmx.org/dist/ext/client-side-templates.js"></script>
  <script src="https://unpkg.com/mustache@latest"></script>
</head>
<body>
  <div hx-ext="client-side-templates">
    <div hx-get="/test/data"
            hx-swap="innerHTML" 
            mustache-template="foo"
            hx-trigger="load">
       
    </div>  
  </div>
  <template id="foo" type="x-tmpl-mustache">
        <table width="100%">
            <!--{{@mustache_strint('#results')}}-->
            <tr><td><img src="{{@mustache_strint('avatar')}}"/></td><td>{{ @mustache_strint('name') }}</td></tr> 
            <!--{{@mustache_strint('/results')}} -->
        </table> 
  </template>
</body>
</html>