
    <!-- Portfolio Modals -->
    @foreach ($commentaires as $comment)
    <!-- Portfolio Modal 1 -->
    <div class="modalMod modal fade" id="modalCommentaire{{$comment->id}}" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLongTitle">Edit Commentaire</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div>
                        <form class="d-flex flex-column w-50 align-items-start  mx-auto "
                            action="{{route('commentaire.update',$comment)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group blue-border">
                                <label for="exampleFormControlTextarea4">Commentaire :</label>
                                
                                <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name='commentaire'>{{$quote->texte}}</textarea>
                              </div>
                            @error('commentaire')
                                <div class="text-danger">{{  $message  }}</div>
                            @enderror
                           
                               
                            
                            
                            <button type="sumbit" class="btn btn-danger text-white mx-auto mt-4 modalBtn">Enregistrer</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach