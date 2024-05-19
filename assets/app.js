/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

const $ = require('jquery')
const bootstrap = require('bootstrap')

require('./scripts/color-modes')

$(() =>
{
    $('[data-toggle="popover"]').popover()

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
})

// any CSS you import will output into a single css file (app.css in this case)
import './styles/bootstrap.scss'
import './styles/cover.scss'
