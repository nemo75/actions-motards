<form method="POST" action="{{$url}}" class="ui form">
   {{ csrf_field() }}
   <div class="field">
       <label for="title">Title</label>
       <inputname="title" type="text" id="title">
   </div>
   <div class="field">
       <label for="image">Choose an Image: </label>
       <input name="image" type="file" id="image">
   </div>
   <div class="field">
       <input type="submit" value="Save">
   </div>
</form>
