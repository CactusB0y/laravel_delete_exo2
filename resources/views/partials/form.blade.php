<div class="container mt-5">
    <form action="/voiture-store" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Marque</label>
          <input type="text" name="marque" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Année</label>
            <input type="number" name="annee" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Couleur</label>
            <input type="text" name="couleur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prix</label>
            <input type="number" name="prix" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Réduction</label>
            <input type="number" name="reduction" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>