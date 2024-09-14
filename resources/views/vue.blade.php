<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3"></script>
</head>
<body>
    <div>
        {{greetings}}
    </div>
    <script>
        Vue.createApp(
            data(){
                return{
                    greeting:'helloword'
                }
            }
        ).mount('app')
    </script>
</body>
</html>