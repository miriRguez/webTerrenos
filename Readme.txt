PV de Terrenos
El sistema debe ser capaz de administrar las ventas de terrenos, 
as� como la automatizaci�n del proceso de contratos.
Las principales funciones del sistema son:
�	Llevar el control de los terrenos disponibles
�	Registrar los clientes y vendedores
�	Registrar los pagos que el comprador ha realizado
�	Generar reportes de pagos, contratos, disponibilidades de terrenos, 
pagos moratorios, usuarios del sistema y ventas.
�	Automatizar la generaci�n y almacenamiento de contratos.
Problemas actuales
El sistema actual, el cual no se maneja por medios digitales, contempla que 
semanalmente cada una de las sucursales, donde los clientes hacen sus pagos, 
debe llevar los registros hechos manualmente, es decir recibos y comprobantes 
en papel a la matriz para luego ser revisados y nuevamente registrados. 
Este sistema es bastante arcaico y se presta a errores y perdidas de datos sin
contemplar lo lento y tedioso que puede ser el tratamiento de la informaci�n. 
Es por eso que se ha contemplado una soluci�n inform�tica para la automatizaci�n 
de todo este proceso, de modo que ahora todos los pagos y cualquier cambio en el 
estado de un cliente o terreno sean reflejados en tiempo real, esto evita horas 
de revisar papeles y  descoordinaci�n semanalmente como en el sistema actual.

La soluci�n se software requerido para este problema debe cumplir con los siguientes puntos:
�	[P001]La informaci�n de los clientes, ventas, pagos, vendedores, predios, manzanas, 
	lotes, contratos y usuarios del sistema se deben registrar y almacenar en una Base de datos.
�	[P002]Cualquier cambio en el estado del sistema deber� ser reflejado inmediatamente y 
	todos los usuarios deber�n siempre tener la misma informaci�n, con esto resolvemos 
	cualquier confusi�n por datos o n�meros que no cuadren.
�	[P003]Se deben tener en cuenta niveles de acceso a las funciones del sistema, es decir 
	niveles de usuarios, un administrador y un vendedor. De modo que el administrador 
	sea capaz de hacer nuevos usuarios as� como revocarlos, as� como el resto de las 
	operaciones del sistema que ser�n detalladas en el rol de usuarios. Los usuarios 
	vendedores deben ser capases de generar ventas as� como registrar pagos.
�	[P004]Se debe automatizar la generaci�n de contratos, al registrar un nuevo cliente 
	toda la informaci�n de este cliente es almacenada en una base de datos as� como los 
	datos de los lotes y documentos. De modo que el sistema tomar� los datos de la BD para
	generar autom�ticamente el formato de contrato listo para imprimir.
�	[P005]Los vendedores cobran una comisi�n por venta. Esta comisi�n puede ser por 
	porcentaje o por una cuota est�tica, el sistema debe ser capaz de calcular y reportar 
	la comisi�n correspondiente por venta.
�	[P006]Se llevar� control de los pagos mensuales, as� como de los "moradores", que es 
	el t�rmino que se utiliza para definir a un comprador con pagos atrasados. Para dichos 
	sujetos, se les aplicar� un inter�s del 6% por lo general), el cual deber� ir definido 
	en el contrato. Al momento de mostrar la informaci�n de los pagos, deber�n distinguirse 
	los compradores que est�n al corriente y los que no.
