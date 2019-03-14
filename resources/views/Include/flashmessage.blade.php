@if (count($errors) >0)
        @foreach ($errors->all() as $error)

                <div class="alert alert-danger">
                        {{ $errors}}
                </div>
            
        @endforeach
@endif

@if (session('success'))

        <div class="alert alert-success">
                <div class="container-fluid">
                        <div class="alert-icon">
                                <i class="material-icons">check</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b> {{ (session('success')) }} </b>
                        
                </div>
        </div>
    
@endif

@if (session('error'))

        <div class="alert alert-danger">
                <div class="container-fluid">
                        <div class="alert-icon">
                                <i class="material-icons">check</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b> {{ (session('error')) }} </b>
                        
                </div>
        </div>
    
@endif