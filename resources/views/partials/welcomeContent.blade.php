<div class="container">
   <div class="row">
       <div class="col-3">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Toute les voitures
        </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Marque</th>
                            <th scope="col">Année</th>
                            <th scope="col">Couleur</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Réduction</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voitures as $voiture)
                            @if ($voiture->reduction == null)
                                <tr>
                                    <th scope="row">{{$voiture->marque}}</th>
                                    <td>{{$voiture->annee}}</td>
                                    <td>{{$voiture->couleur}}</td>
                                    <td>{{$voiture->prix}}€</td>
                                    <td> </td>
                                    <td>
                                        <form action="/voiture-delete/{{$voiture->id}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <th scope="row">{{$voiture->marque}}</th>
                                    <td>{{$voiture->annee}}</td>
                                    <td>{{$voiture->couleur}}</td>
                                    <td>{{$voiture->prix}}€</td>
                                    <td>{{$voiture->reduction}}%</td>
                                    <td>
                                        <form action="/voiture-delete/{{$voiture->id}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
       </div>
       <div class="col-3">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
        Voiture à moins de 4000€
        </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Marque</th>
                            <th scope="col">Année</th>
                            <th scope="col">Couleur</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Réduction</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($moins as $voiture)
                            @if ($voiture->reduction == null)
                                <tr>
                                    <th scope="row">{{$voiture->marque}}</th>
                                    <td>{{$voiture->annee}}</td>
                                    <td>{{$voiture->couleur}}</td>
                                    <td>{{$voiture->prix}}€</td>
                                    <td> </td>
                                    <td>
                                        <form action="/voiture-delete/{{$voiture->id}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <th scope="row">{{$voiture->marque}}</th>
                                    <td>{{$voiture->annee}}</td>
                                    <td>{{$voiture->couleur}}</td>
                                    <td>{{$voiture->prix}}€</td>
                                    <td>{{$voiture->reduction}}%</td>
                                    <td>
                                        <form action="/voiture-delete/{{$voiture->id}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
       </div>
       <div class="col-3">
                   <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
        Voiture à plus de 4000€
        </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Marque</th>
                            <th scope="col">Année</th>
                            <th scope="col">Couleur</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Réduction</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plus as $voiture)
                            @if ($voiture->reduction == null)
                                <tr>
                                    <th scope="row">{{$voiture->marque}}</th>
                                    <td>{{$voiture->annee}}</td>
                                    <td>{{$voiture->couleur}}</td>
                                    <td>{{$voiture->prix}}€</td>
                                    <td> </td>
                                    <td>
                                        <form action="/voiture-delete/{{$voiture->id}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <th scope="row">{{$voiture->marque}}</th>
                                    <td>{{$voiture->annee}}</td>
                                    <td>{{$voiture->couleur}}</td>
                                    <td>{{$voiture->prix}}€</td>
                                    <td>{{$voiture->reduction}}%</td>
                                    <td>
                                        <form action="/voiture-delete/{{$voiture->id}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
       </div>
       <div class="col-3">
                   <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
        Voiture avec réduction
        </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Marque</th>
                            <th scope="col">Année</th>
                            <th scope="col">Couleur</th>
                            <th scope="col">Prix</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reductions as $voiture)
                            <tr>
                                <th scope="row">{{$voiture->marque}}</th>
                                <td>{{$voiture->annee}}</td>
                                <td>{{$voiture->couleur}}</td>
                                <td><strike>{{$voiture->prix}}€</strike><p class="text-danger">{{$voiture->prix-($voiture->prix*$voiture->reduction/100)}}</p></td>
                                <td>
                                    <form action="/voiture-delete/{{$voiture->id}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
       </div>
   </div>
</div>