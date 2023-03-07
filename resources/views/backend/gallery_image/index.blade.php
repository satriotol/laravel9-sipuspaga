<div class="card">
    <div class="card-header">
        <h3 class="card-title">Galeri</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table border table-bordered text-nowrap text-md-nowrap table-sm mb-0">
                <thead>
                    <tr class="text-center">
                        <th>image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gallery->gallery_images as $gallery_image)
                        <tr>
                            <td><img src="{{ asset('uploads/' . $gallery_image->image) }}" height="100px"></td>
                            <td class="text-center">
                                <form action="{{ route('gallery_image.destroy', $gallery_image->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure?')" value="Delete" id="">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
