<?php require_once COMPONENTS . '/header.php'; ?>

<div class='main wrapper clearfix'>

    <article>
        {% for section in sections %}
        <section>
            <h2>{{ section.title }}</h2>
            <p>{{ section.body }}</p>
        </section>
        {% endfor %}

    </article>

    <aside>
        <h3>aside</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
    </aside>

</div> <!-- #main -->

<?php require_once COMPONENTS . '/footer.php'; ?>