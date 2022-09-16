#sass --update default.scss:output.css

# sass-dev
sass --watch --update --style=expanded default.scss:dev.css

# sass-prod
sass --sourcemap=none --style=compressed default.scss:../css/prod-default.css
sass --sourcemap=none --style=compressed custom.scss:../css/prod-bootstrap.css

