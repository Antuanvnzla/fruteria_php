<div id="exercicis">
	<div id="exercici01">
		<h2>Exercici 01</h2>

		<span class="destacat">Enunciat:</span>
		<ul>
			<li>En camps ocults del formulari al final de l'enunciat hem d'obtenir les dades de connexió a la base de
				dades
				(que creem a partir del fitxer sql adjunt):
				<ul>
					<li>servidor</li>
					<li>usuari</li>
					<li>contrasenya</li>
					<li>basededades</li>
					<li>taula</li>
				</ul>
			</li>
			<li>Quan les obtenim, les introduïm en un <strong>objecte</strong> DadesDonnexio (els atributs del qual són
				privats).</li>
			<li>En funció del que es tria al desplegable, al fitxer <strong>processaExercici01.php</strong> es pot:
				Inserir un usuari, esborrar tots el usuaris, fer un
				backup.</li>
			<li><strong>Inserir un usuari en la base de dades:</strong>
				<ul>
					<li>Si s'ha deixat algun dels camps del formulari en blanc, es mostra un missatge i no s'insereix
						res a la base de dades.</li>
					<li>Per poder inserir un usuari en la base de dades la longitud de les cadenes de nom i ciutat ha de ser major o igual a 3.</li>
					<li>Per poder inserir un usuari en la base de dades el número ha de ser parell i estar entre 1 i 200 (inclosos)</li>
					<li>Si no es compleixen les condicions anteriors, no s'ha d'inserir a la base de dades, mostrant un missatge indicant l'error corresponent.</li>
					<li>Si el select té algun valor triat, no s'ha d'inserir cap valor en la base de dades</li>
				</ul>
			</li>
			<li><strong>Fer un backup: (en una funció que rep un objecte DadesConnexio)</strong>
				<ul>
					<li>Dins de la carpeta fitxers es crearà una carpeta de nom "backup_AAAAMMDD_HHMMSS"</li>
					<li>En aquesta carpeta es crearà un fitxer amb nom dades.txt amb la informació de cada usuari per
						files, amb el format: id;nom;cognoms;dni</li>
					<li>Després es mostrarà un missatge indicant que s'ha realitzat el backup.</li>
				</ul>
			</li>

			<li><strong>Eliminar els usuaris de la taula: (en una funció que rep un objecte DadesConnexio)</strong>
				<ul>
					<li>S'esborraran tots els usuaris de la taula i s'indicarà en la pàgina amb un missatge.</li>
					<li>En qualsevol cas, es mostrarà el contingut de la taula usuaris, utilitzant una funció, que rep un objecte DadesConnexio.</li>
				</ul>
			</li>

		</ul>


		<form id="form_exercici01" method="POST" action="include/processaExercici01.php" enctype="multipart/form-data">
			<input type="hidden" value="localhost" name="servidor" id="servidor">
			<input type="hidden" value="root" name="usuari" id="usuari">
			<input type="hidden" value="" name="contrasenya" id="contrasenya">
			<input type="hidden" value="examenPHP" name="basedades" id="basedades">
			<input type="hidden" value="usuaris" name="taula" id="taula">
			<div class="filaform">
				<span>Nom</span>
				<span><input type="text" name="nom" id="nom"></span>
			</div>
			<div class="filaform">
				<span>Ciutat</span>
				<span><input type="text" name="ciutat" id="ciutat"></span>
			</div>
			<div class="filaform">
				<span>Número</span>
				<span><input type="number" name="numero" id="numero" min="-4000" max="4000"></span>
			</div>
			<div class="filaform">
				<span>Opció (Si es tria, no s'insereix cap usuari)</span>
				<span>
					<select id="opcio" name="opcio">
						<option value="insert">Insereix usuari</option>
						<option value="backup">Fer un backup</option>
						<option value="delete">Eliminar usuaris</option>
					</select>
				</span>
			</div>
			<div class="filaform">
				<span><input id="submitform" name="submitform" type="submit" value="Envia"></span>
			</div>
		</form>

	</div><!--final exercici 01-->


	<div id="exercici02">
		<h2>Exercici 02</h2>
		<span class="destacat">Enunciat: Quadrat d'imatges</span><br />
		<ul>
			<li>L'usuari ha d'introduir un número entre el 3 i el 10 al formulari.</li>
			<li>En el fitxer processaExercici02.php, mitjançant una funció es comprova si el número està en aquest rang.</li>
			<li>A la funció també se li han de passar els valor màxim i mínim, que estan definits en dues constants en processaExercici02.php.</li>
			<li>Si està fora del rang es mostra un missatge indicant-ho i la imatge error.png.</li>
			<li>Si es tracta del número sorpresa (que es passa com a camp ocult al formulari), s'ha d'obrir la pàgina sorpresa.php, mostrant el número i la imatge
			sorpresa.png tantes vegades com el número indique</li>
			<li>Si està en el rang i no és el número sorpresa es farà un quadrat d'imatges amb tantes imatges per costat com indique l'usuari amb el número</li>
			<li>En els cantons ficarem la imatge del gat. En la resta, la imatge del ratolí</li>
			<li>La classe que se li pot aplicar per mostrar-les és imatgequadrat</li>
			<li>Les imatges dels cantons tenen un enllaç, quan es fa clic sobre ell, s'ha de tornar a la pròpia pàgina i
			canviar la imatge del gat per sorpresa.png</li>
			<li>En qualsevol cas, es guarden en una cookie (de 5 dies de durada) de nom <strong>cookie_intents</strong> tots els valors que s'hagen introduit, correctes o incorrectes.</li>
			<li>Quan hi ha 5 valors en la cookie, aquesta es reinicia.</li>
			<li>Des de $_COOKIE, no es veurà l'últim valor, però es poden utilitzar altres variables per visualitzar-lo.</li>
			<li>Si no s'ha introduït el número sorpresa, es mostren tots els números existents a la cookie fins el moment.</li>
		</ul>
		<form id="form_exercici02" method="POST" action="include/processaExercici02.php">
			<input type="hidden" value="500" name="sorpresa" id="sorpresa">
			<div class="filaform">
				<span>Número</span>
				<span><input type="number" name="numero" id="numero" min="-1000" max="1000" required></span>
			</div>
			<div class="filaform">
				<span><input id="submitform" name="submitform" type="submit" value="Envia"></span>
			</div>
		</form>
	</div> <!--final exercici 02-->
</div>