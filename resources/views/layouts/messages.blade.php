<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-sm-12" id="messageBox">

            @if(session('message_warning'))
                <div class="alert alert-warning fade in">
                    <button class="close" data-dismiss="alert">
                        X
                    </button>
                    <i class="fa-fw fa fa-warning"></i>
                    {{ session('message_warning') }}
                    {{ session()->forget('message_warning') }}
                </div>
            @endif

            @if(session('message_success'))
                <div class="alert alert-success fade in">
                    <button class="close" data-dismiss="alert">
                        X
                    </button>
                    <i class="fa-fw fa fa-check"></i>
                    {{ session('message_success') }}
                    {{ session()->forget('message_success') }}
                </div>
            @endif

            @if(session('message_info'))
                <div class="alert alert-info fade in">
                    <button class="close" data-dismiss="alert">
                        X
                    </button>
                    <i class="fa-fw fa fa-info"></i>
                    {{ session('message_info') }}
                    {{ session()->forget('message_info') }}
                </div>
            @endif

            @if(session('message_danger'))
                <div class="alert alert-danger fade in">
                    <button class="close" data-dismiss="alert">
                        X
                    </button>
                    <i class="fa-fw fa fa-times"></i>
                    {{ session('message_danger') }}
                    {{ session()->forget('message_danger') }}
                </div>
            @endif

            @if(count($errors) > 0)
            <div class="alert alert-danger fade in">
                <button class="close" data-dismiss="alert">
                    X
                </button>
                <i class="fa-fw fa fa-times"></i>
                Please, fix the following errors
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

        </article>
        <!-- WIDGET END -->

    </div>

</section>