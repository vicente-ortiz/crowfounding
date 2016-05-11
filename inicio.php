require_once(dirname(dirname(dirname(__FILE__))) . '/config.php');
// Parameter passed from the url.
$name = 'hola';
// Moodle pages require a context, that can be system, course or module (activity or resource)
$context = context_system::instance();
$PAGE->set_context($context);
// Check that user is logued in the course.
require_login();
// Page navigation and URL settings.
$PAGE->set_url(new moodle_url('/local/feria', array('filter'=>$name)));
$PAGE->set_pagelayout('incourse');
$PAGE->set_title('Feria de Proyectos');
// Show the page header
// Here goes the content
echo $OUTPUT->header();
echo'<form action="guardarproyecto.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>Nombre del proyecto: </td><td><input type="text" name="nombre" />*</td></tr>
<tr><td>Descripcion:</td><td><input type="text" name="descripcion" />*</td></tr>
<tr><td>Categor&iacutea: </td><td> <select name="categoria"/>
<option value="arte">Arte</option>
<option value="biologia">Biolog&iacutea</option>
<option value="deporte">Deporte</option>
<option value="fisica">F&iacutesica</option>
<option value="historia">Historia</option>
<option value="matematicas">Matem&aacuteticas</option>
<option value="medio">Medio Ambiente</option>
<option value="musica">M&uacutesica</option>
<option value="negocios">Negocios</option>
<option value="quimica">Qu&iacutemica</option>
</select>*</td></tr>
 <tr><td>Foto:</td><td><input TYPE="file" name="uploadedfile" id="uploadedfile" />*</td></tr>
<tr><td></td><td><input TYPE="file" name="foto2" id=”foto2” /></td></tr>
<tr><td></td><td><input TYPE="file" name="foto3" id=”foto3” /></td></tr>
<tr><td></td><td><input TYPE="file" name="foto4" id=”foto4”/></td></tr>
<tr><td>Archivo: </td><td> <input type="file" name="urlarchivo" id=”urlarchivo” />*</td></tr>
 <tr><td>Url de video: </td><td><input type="text" name="urlvideo" /></td></tr>
 <tr><td></td><td><p><input name=enviardatos type="submit" /></p></td><td></td></tr>
<tr><td></td><td> * Campos Obligatorios</td></tr></table></form> ';
// Show the page footer
echo $OUTPUT->footer();