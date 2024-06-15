<section class="conf-step">
    <header class="conf-step__header conf-step__header_opened">
        <h2 class="conf-step__title">Управление залами</h2>
    </header>
    <div class="conf-step__wrapper">
        <p class="conf-step__paragraph">Доступные залы: </p>       
        <ul class="conf-step__list">
            @foreach ($halls as $hall)
                <li>                    
                    <form method="POST" action="{{ route('halls.destroy', $hall) }}"  >
                        @method('DELETE')
                        @csrf
                        Зал {{$hall->id}}
                        <button type="submit" class="conf-step__button conf-step__button-trash"></button>
                    </form>                   
                </li>
            @endforeach
        </ul>
        <form method="POST" action="{{ route('halls.store') }}">
            <button type="submit" class="conf-step__button conf-step__button-accent">
                Создать зал
            </button>
        </form>
    </div>
</section>
