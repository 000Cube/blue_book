<table>
    <form action="/rest" method="post">
    {{ csrf_field() }}
    <tr><th>message:</th><td><input type="text" name="message" value="{{$items->message}}"></td></tr>
    <tr><th>url:</th><td><input type="text" name="url" value="{{$items->url}}"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>