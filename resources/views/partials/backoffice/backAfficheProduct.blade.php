<section class="mb-5">
    <h2 class=" text-center m-5">Créer un nouveau Product <a class="text-success" href="/product/create"> CLICK HERE</a></h2>
    <div class="w-75 mx-auto">
      <table class="table  table-danger">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Photo</th>
              <th scope="col">Name</th>
              <th scope="col">State</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Discount</th>
              <th scope="col">type_id</th>
              <th scope="col">size_id</th>
              <th scope="col">user_id</th>
              <th scope="col">Star/Classic</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $item)
            <tr>
              <th scope="row">{{$item->id}} </th>
              <td>
                  {{-- <img src="{{asset('/images/270x270/'. $item->image[0]->src)}}" alt=""> </td> --}}
                {{-- {{dd($item->image)}} --}}
                <img src="{{asset('/thumbnail/images/70x83/details1.jpg')}}" alt=""> </td>
              <td>{{$item->name}} </td>
              <td>{{$item->state}} </td>
              <td>{{substr($item->description, 0, 25)}} </td>
              <td>{{$item->price}} </td>
              <td>{{$item->discount}} </td>
              <td>{{$item->type_id}} </td>
              <td>{{$item->size_id}} </td>
              <td>{{$item->user_id}} </td>
              
              <td class="{{$item->image[0]->bool == 1 ? 'table-dark ' : 'table-warning '}} ">{{$item->image[0]->bool == 1 ? 'Star Product' : 'Classic Product'}} </td>
              <td>
                <div class="d-flex justify-content-center text-center mx-3 mb-5">
                  <form action="/product/{{ $item->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                  </form>
                  <button class="btn btn-primary">
                      @csrf
                      <a class="text-decoration-none text-white" href="/product/{{ $item->id }}/edit ">Modifier</a>
                  </button>
          
              </div>
          
              </td>
            </tr>
                
            @endforeach
          </tbody>
        </table>
  </div>
  
  </section>
