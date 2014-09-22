PV de Terrenos
El sistema debe ser capaz de administrar las ventas de terrenos, 
así como la automatización del proceso de contratos.
Las principales funciones del sistema son:
•	Llevar el control de los terrenos disponibles
•	Registrar los clientes y vendedores
•	Registrar los pagos que el comprador ha realizado
•	Generar reportes de pagos, contratos, disponibilidades de terrenos, 
pagos moratorios, usuarios del sistema y ventas.
•	Automatizar la generación y almacenamiento de contratos.
Problemas actuales
El sistema actual, el cual no se maneja por medios digitales, contempla que 
semanalmente cada una de las sucursales, donde los clientes hacen sus pagos, 
debe llevar los registros hechos manualmente, es decir recibos y comprobantes 
en papel a la matriz para luego ser revisados y nuevamente registrados. 
Este sistema es bastante arcaico y se presta a errores y perdidas de datos sin
contemplar lo lento y tedioso que puede ser el tratamiento de la información. 
Es por eso que se ha contemplado una solución informática para la automatización 
de todo este proceso, de modo que ahora todos los pagos y cualquier cambio en el 
estado de un cliente o terreno sean reflejados en tiempo real, esto evita horas 
de revisar papeles y  descoordinación semanalmente como en el sistema actual.

La solución se software requerido para este problema debe cumplir con los siguientes puntos:
•	[P001]La información de los clientes, ventas, pagos, vendedores, predios, manzanas, 
	lotes, contratos y usuarios del sistema se deben registrar y almacenar en una Base de datos.
•	[P002]Cualquier cambio en el estado del sistema deberá ser reflejado inmediatamente y 
	todos los usuarios deberán siempre tener la misma información, con esto resolvemos 
	cualquier confusión por datos o números que no cuadren.
•	[P003]Se deben tener en cuenta niveles de acceso a las funciones del sistema, es decir 
	niveles de usuarios, un administrador y un vendedor. De modo que el administrador 
	sea capaz de hacer nuevos usuarios así como revocarlos, así como el resto de las 
	operaciones del sistema que serán detalladas en el rol de usuarios. Los usuarios 
	vendedores deben ser capases de generar ventas así como registrar pagos.
•	[P004]Se debe automatizar la generación de contratos, al registrar un nuevo cliente 
	toda la información de este cliente es almacenada en una base de datos así como los 
	datos de los lotes y documentos. De modo que el sistema tomará los datos de la BD para
	generar automáticamente el formato de contrato listo para imprimir.
•	[P005]Los vendedores cobran una comisión por venta. Esta comisión puede ser por 
	porcentaje o por una cuota estática, el sistema debe ser capaz de calcular y reportar 
	la comisión correspondiente por venta.
•	[P006]Se llevará control de los pagos mensuales, así como de los "moradores", que es 
	el término que se utiliza para definir a un comprador con pagos atrasados. Para dichos 
	sujetos, se les aplicará un interés del 6% por lo general), el cual deberá ir definido 
	en el contrato. Al momento de mostrar la información de los pagos, deberán distinguirse 
	los compradores que están al corriente y los que no.
