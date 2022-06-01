<section class="w-50 mx-auto mb-5">
    <h1 class="text-center my-5"><a class="text-decoration-none text-dark  " href="/backAbout">Voir toutes les infos
            👉</a></h1>
    <div class="bg-info py-5">
        <h1 class="text-center text-white">Editer des infos</h1>

        <form class="w-75 mx-auto text-white" action="/info/{{$info->id}} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Title</label>
                <input value="{{$info->title}} " name="title" type="text" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>

            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">content1</label>
                <textarea class="custom-textarea" name="content1" placeholder="Your content1 here...">{{$info->content1}} </textarea>
            </div>

            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">content2</label>
                <textarea class="custom-textarea" name="content2" placeholder="Your content2 here...">{{$info->content2}}</textarea>
            </div>

            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">content3</label>
                <textarea class="custom-textarea" name="content3" placeholder="Your content2 here...">{{$info->content3}}</textarea>
            </div>

            <div>
                <label for="addSmallerInputName" class="form-label">Image de About Us</label>
                <input class="mb-3" type="file" name="file" >
            </div>


            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Address1</label>
                <input value="{{$info->address1}} " name="address1" type="text" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>

            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Address2</label>
                <input value="{{$info->address2}} " name="address2" type="text" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>

            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Phone</label>
                <input value="{{$info->phone}} " name="phone" type="text" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>

            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Email</label>
                <input value="{{$info->email}} " name="email" type="text" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>

            <button type="submit" class="btn btn-primary">Editer</button>
        </form>

    </div>
</section>
