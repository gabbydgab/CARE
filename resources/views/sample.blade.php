<form action="{{route('post-form')}}" method="POST">
    @csrf
    <input name="family_name" id="family_name" >
    <input name="name[]" >
    <input name="name[]">
    <button type="submit">Submit</button>
</form>
