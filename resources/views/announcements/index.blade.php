<div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
    <div class="row">
        <div class="col-12 text-light p-5">
            <h1 class="diplay-2">Ecco i nostri annunci</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                @foreach ($announcement as $announcement)
                    <div class="col-12 col-md-4 my-4">
                        <div class="card shadow">
                            <img src="http://picsum.photos/200" class="card-img-top p-3 rounded" alt="...">
                            <div class="card-body">          
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <p class="card-text">{{$announcement->body}}</p>
                        <p class="card-text">{{$announcement->price}}</p>
                        


                            </div>

                        </div>



                    </div>
                
                        
    
                        


            </div>


                </div>

            </div>
        </div>
    </div>
</div>
</x-layout>