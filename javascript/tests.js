var isArthur = false;
var isKing = false;
var helmet;
var weapon;

// Normal way
if (isArthur) {
	weapon = "Excalibur";
} else {
	weapon = "Longsword";
}

// Ternary
weapon = isArthur ? "Excalibur" : "Longsword";

// Multiple Actions Ternary

isArthur && isKing ? (weapon = "Excalibur", helmet = "Goosewhite") 
					:
				 	(weapon = 'Longsword'), (helmet = 'Iron Healm');

console.log('Current weapon:' + weapon + ' helmet: ' + helmet);				 