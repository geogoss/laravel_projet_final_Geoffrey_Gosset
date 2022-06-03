<section class="mb-5">

    <h2 class=" text-center m-5 text-white">Customers :  {{ Auth::user()->name }} est connecté en tant qu'{{ Auth::user()->role->name }} <a class="text-success" href="/product/create"> CLICK HERE</a>
    </h2>
    <div class="w-75 mx-auto">
        <table class="table  table-danger">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <th scope="row">{{ $item->id }} </th>
                        {{-- {{dd($item->avatar->src)}} --}}
                        <td><img style="width: 50px; height: 50px;"
                                src="{{ asset('/thumbnail/images/90x100/' . $item->avatar->src) }}" alt=""> </td>
                        <td>{{ $item->name }} </td>
                        <td>{{ $item->email }} </td>
                        <td>{{ $item->role->name }} </td>
                        <td>
                            <div class="d-flex justify-content-center text-center mx-3 mb-5">
                                @can('test', $item)
                                    <form action="/user/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                                    </form>
                                    <button class="btn btn-primary">
                                        @csrf
                                        <a class="text-decoration-none text-white"
                                            href="/user/{{ $item->id }}/edit ">Modifier</a>
                                    </button>
                                @endcan
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>
