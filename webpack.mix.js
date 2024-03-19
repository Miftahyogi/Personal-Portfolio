mix.sass("resources/sass/app.scss", "public/css")
    .postCss("resources/css/main.css", "public/css", [
        require("postcss-import"),
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .styles(
        [
            "node_modules/bootstrap/dist/css/bootstrap.css",
            "public/css/main.css",
        ],
        "public/css/app.css"
    );
