<?PHP
interface IWeapon
{
    private $_id;
    private $_name;
    private $_ammunition;

	public function shoot();

    public function setAmmunition($a);

	public function getAmmunition();

	public function getId();
}
?>
