
    <form action="{{route('ingredient-wijzig.update', ['id'=>$pizzas->id])}}" method="POST">
         @csrf
        @method('put')
            <label for="name" > Toppings:</label>
                @foreach($pizzas->ingredients as $ingredient)

                    <input id="name"  type="text" name="name" value="{{ $ingredient->name }}" />
                @endforeach
                @foreach($pizzas->ingredients as $ingPrice)

                @endforeach
            <input value="Berstellen"  type="submit">  </input>
    </form>
