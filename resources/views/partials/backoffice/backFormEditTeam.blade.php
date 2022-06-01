<section class="w-50 mx-auto mb-5">
    <h1 class="text-center my-5"><a class="text-decoration-none text-dark  " href="/backAbout">Voir toutes les infos
            👉</a></h1>
    <div class="bg-info py-5">
        <h1 class="text-center text-white">Editer les membres de la team</h1>

        <form class="w-75 mx-auto text-white" action="/team/{{$team->id}} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Name</label>
                <input value="{{$team->name}} " name="name" type="text" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>

            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Firstname</label>
                <input value="{{$team->firstname}} " name="firstname" type="text" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>

            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Age</label>
                <input value="{{$team->age}} " name="age" type="integer" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>

            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">content</label>
                <textarea class="custom-textarea" name="content" placeholder="Your content1 here...">{{$team->content}} </textarea>
            </div>


            <div>
                <label for="addSmallerInputName" class="form-label">Image du teamer</label>
                <input class="mb-3" type="file" name="file"  ">
            </div>


            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Fonction</label>
                <input value="{{$team->fonction}} " name="fonction" type="text" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>

            <button type="submit" class="btn btn-primary">Editer</button>
        </form>

    </div>
</section>
