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
        <h3>{{ aside.title }}</h3>
        <p>L{{ aside.body }}</p>
    </aside>

</div> <!-- #main -->

<?php require_once COMPONENTS . '/footer.php'; ?>