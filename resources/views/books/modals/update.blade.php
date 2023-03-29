@foreach ($books as $book)
<div class="modal modal-right large fade" id="updateData{{ $book->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('books/'.$book->id.'/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <select name="user_id" id="" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="publisher">Publisher</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" min="1000" class="form-control" id="price" name="price" value="{{ $book->price }}">
                    </div>
                    <div class="form-group">
                        <label for="published_at">Published At</label>
                        <input type="date" class="form-control" id="published_at" name="published_at" value="{{ $book->published_at }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
