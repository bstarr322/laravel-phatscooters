@if(!isset($no_padding))
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        Powered by <a href="javascript:void(0)">{{ config('app.devteam') }}</a>
    </div>
    <strong>Copyright &copy; <?php echo date("Y")?>
</footer>
@endif