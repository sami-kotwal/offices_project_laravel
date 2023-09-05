<h2>Hey, It's me {{ $data->name }}</h2> 
<br>
    


<div style="background-color: gray" class="container">
    <div class="col-lg-12">
        <h1 class="mt-5">User details:<br></h1>
        <h1 class="mt-5">Name:</h1><h3>{{ $data->name }} </h3>
<h2 class="mt-3">Email:</h2><h3>{{ $data->email }} </h3>
<h2 class="mt-3">Number:</h2><h3>{{ $data->number }} </h3>
<h2 class="mt-3">Country:</h2><h3>{{ $data->country }} </h3>
<h2 class="mt-3">Project:</h2><h3>{{ $data->project }} </h3>
<h2 class="mt-3">Massage:</h2><p>{{ $data->message }} </p>
    </div>
</div>
  
Thank you