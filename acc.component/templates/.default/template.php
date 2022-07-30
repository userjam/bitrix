<h2>Аккордеон</h2>

<?foreach($arResult["ACC_NAME"] as $key => $acc_name):?>
<button class="accordion"><?=$acc_name?></button>
<div class="panel">
  <p><?=$arResult["ACC_DESCRIPTION"][$key]?></p>
</div>
<?endforeach;?>

<script type="text/javascript">
let acc = document.getElementsByClassName("accordion");
for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>



