<?php
/* Copyright (C) 2012	Regis Houssin	<regis@dolibarr.fr>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$ldap = array(
		'CHARSET' => 'UTF-8',
		'DomainPassword' => 'Contraseña del dominio',
		'YouMustChangePassNextLogon' => 'La contraseña de <b>%s</b> en el dominio <b>%s</b> debe de ser modificada.',
		'UserMustChangePassNextLogon' => 'El usuario debe cambiar de contraseña en la próxima conexión',
		'LdapUacf_NORMAL_ACCOUNT' => 'Cuenta usuario',
		'LdapUacf_DONT_EXPIRE_PASSWORD' => 'La contraseña no caduca',
		'LdapUacf_ACCOUNTDISABLE' => 'La cuenta está desactivada en el dominio',
		'LDAPInformationsForThisContact' => 'Información de la base de datos LDAP de este contacto',
		'LDAPInformationsForThisUser' => 'Información de la base de datos LDAP de este usuario',
		'LDAPInformationsForThisGroup' => 'Información de la base de datos LDAP de este grupo',
		'LDAPInformationsForThisMember' => 'Información de la base de datos LDAP de este miembro',
		'LDAPAttribute' => 'Atributo LDAP',
		'LDAPAttributes' => 'Atributos LDAP',
		'LDAPCard' => 'Ficha LDAP',
		'LDAPRecordNotFound' => 'Registro no encontrado en la base de datos LDAP',
		'LDAPUsers' => 'Usuarios en la base de datos LDAP',
		'LDAPGroups' => 'Grupos en la base de datos LDAP',
		'LDAPFieldStatus' => 'Estatuto',
		'LDAPFieldFirstSubscriptionDate' => 'Fecha primera adhesión',
		'LDAPFieldFirstSubscriptionAmount' => 'Importe primera adhesión',
		'LDAPFieldLastSubscriptionDate' => 'Fecha última adhesión',
		'LDAPFieldLastSubscriptionAmount' => 'Importe última adhesión',
		'SynchronizeDolibarr2Ldap' => 'Sincronizar usuario (Dolibarr -> LDAP)',
		'UserSynchronized' => 'Usuario sincronizado',
		'GroupSynchronized' => 'Grupo sincronizado',
		'MemberSynchronized' => 'Miembro sincronizado',
		'ContactSynchronized' => 'Contacto sincronizado',
		'ForceSynchronize' => 'Forzar sincronización Dolibarr -> LDAP',
		'ErrorFailedToReadLDAP' => 'Error de la lectura del directorio LDAP. Comprobar la configuración del módulo LDAP y la accesibilidad del anuario.'
);
?>