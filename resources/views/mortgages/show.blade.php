<h1>{{ $mortgage->title }}</h1>
<p>Процентная ставка: {{ $mortgage->percent }}%</p>
<p>Стоимость недвижимости: от {{ $mortgage->min_price }} до {{ $mortgage->max_price }}</p>
<p>Первоначальный взнос: от {{ $mortgage->min_first_payment }}% до {{ $mortgage->min_first_payment }}%</p>
<p>Срок ипотеки: от {{ $mortgage->min_term }} до {{ $mortgage->max_term }} месяцев</p>