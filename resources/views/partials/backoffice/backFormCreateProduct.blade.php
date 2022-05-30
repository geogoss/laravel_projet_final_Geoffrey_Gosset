<section class="w-50 mx-auto mb-5">
    <h1 class="text-center my-5"><a class="text-decoration-none text-dark  " href="/backProduct">Voir tous les produits 👉</a></h1>
    <div class="bg-success py-5">
        <h1 class="text-center text-white">Créer un Product</h1>

        <form class="w-75 mx-auto text-white" action="/product" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputLatin" class="form-label">State</label>
                <select name="state" class="custom-select mb-15">
                    <option value="null">null</option>
                    <option value="new">New</option>
                    <option value="sale" >Sale</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="addTreeInputMin" class="form-label">Description</label>
                <textarea name="description" type="text" class="form-control" id="addTreeInputMin"
                    aria-describedby="addTreeInputMinHelp"></textarea>
            </div>
            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Price</label>
                <input name="price" type="text" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Discount</label>
                <input name="discount" type="integer" step="0.01" class="form-control" id="exampleInputEmail1"
                    aria-describedby="exampleInputEmail1Help">
            </div>
            
            <label for="addTreeInputUrl" class="form-label">Type</label>
            <select name="type_id" class="custom-select mb-15">
                @foreach ($types as $type)
                    <option value="{{ $type->name }}" >{{ $type->name }} </option>
                @endforeach
            </select>

            <label for="addTreeInputUrl" class="form-label">Size</label>
            <select name="size_id" class="custom-select mb-15">
                @foreach ($sizes as $size)
                    <option value="{{ $size->name }}" >{{ $size->name }} </option>
                @endforeach
            </select>

            <div>
                <input class="mb-3" type="file" name="file" >
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>

    </div>
</section>
