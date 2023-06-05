# 2.12.0
- Feature: Neue Konfiguration hinzugefügt, um die Schriftfamilie für Footer Inhalte festzulegen.
- Feature: Neue Konfiguration hinzugefügt, um die Schriftgröße und Schriftstärke des unteren Footers festzulegen.
- Feature: Neue Konfiguration hinzugefügt, um die Schriftfamilie für den Namen der Produktdetails festzulegen.
- Feature: Neue Konfiguration hinzugefügt, um die Schriftfamilie für den Produktnamen auf Produktseiten festzulegen.
- Feature: Neue Konfiguration hinzugefügt, um den oberen Rahmen der Hauptnavigation auf volle Breite einzustellen.
- Feature: Neue Konfiguration hinzugefügt, um Galerie-Thumbnail-Navigation im eingestellten Produkt-Seitenverhältnis anzuzeigen.
- Feature: Neue Konfiguration hinzugefügt, um zwischen verschiedenen Galerie-Thumbnail-Navigationsstilen zu wählen.
- Feature: Neue Konfiguration hinzugefügt, um Breadcrumbs einen Home-Link hinzuzufügen.
- Feature: Neue Konfiguration zum Einstellen des Galerie-Zoomfaktors hinzugefügt.
- Feature: Neue Konfiguration hinzugefügt, um die Herstellerposition für Produktdetails und Schnellansicht festzulegen.
- Feature: Neue Icon-Sets `Iconly Bulk`, `Iconly Broken`, `Iconly Light-Outline` hinzugefügt
- Feature: Neue Konfiguration hinzugefügt, um den Rand der oberen Leiste unten festzulegen.
- Feature: Bootstrap Responsive Font Size Mixin wird nun in SCSS verwendet.
- Optimierung: Icons für den Icon-Cache vorbereitet.
- Optimierung: Entfernt den aktiven Zustand des Breadcrumb-Elements.
- Optimierung: Layout-Containerbreite für Thumbnail-Utility hinzugefügt.
- Optimierung: Allgemeine Verbesserungen der Theme-Konfiguration.
- Optimierung: Verbessert die zentrierte Ausrichtung der Kategorie-Navigation, wenn sie in eine neue Zeile umbricht.
- Optimierung: Spalten zu Blöcken für Thumbnail-Größen hinzugefügt.
- Optimierung: Option zum automatischen Ausblenden von Sticky-Header bei mehrzeilige Headern auf Mobilgeräten hinzugefügt.
- Optimierung: Hover-Status der Suchschaltfläche entfernt.
- Optimierung: Kompatibilität der floating Labels Funktion erhöht.
- Bugfix: Doppelte Itemprops entfernt.
- Bugfix: Behebt die doppelte Anzeige von Themes im Dashboard.
- Bugfix: Tooltips verzögern sich bei Kartenaktionen.
- Bugfix: Umbenennung des Icons "eye" in "eye-open", um ein Problem mit dem Quickview Icon zu beheben.

# 2.11.0
- Feature: Neue Themen-Schriften hinzugefügt: „Comfortaa“, „Frank Ruhl Libre“, „Montserrat“, „Open Sans“, „Playfair Display“, „Raleway“, „Signika“, „Vidaloka“.
- Feature: Standardwert für 'Lade Schriften von Google' auf `false` gesetzt und Schriften als Theme-Schriften implementiert.
- Feature: Neue Konfiguration hinzugefügt, um Artikelnummer `Farbe`, `Schriftgröße`, `Gewicht` und `Textausrichtung` in Produkt-Boxen festzulegen.
- Feature: Neue Konfiguration hinzugefügt, um Variantenmerkmale `Farbe`, `Schriftgröße`, `Gewicht` und `Textausrichtung` in Produkt-Boxen festzulegen.
- Feature: Neue Konfiguration hinzugefügt, um Varianten günstigster Preis `Farbe`, `Schriftgröße`, `Gewicht` und `Textausrichtung` in Produkt-Boxen festzulegen.
- Feature: Neue Konfiguration hinzugefügt, um Grundpreis `Farbe`, `Schriftgröße`, `Gewicht` und `Textausrichtung` in Produkt-Boxen festzulegen.
- Feature: Ablaufdatum zum optionalen Google Fonts-Cookie hinzugefügt.
- Feature: Zusätzliche Möglichkeit zum Schließen der Overlay-Suche und ausklappbare Suche mit Escape-Taste.
- Feature: Die Sichtbarkeit der Recaptcha-Felder in der Fußzeile ändert sich je nach Eingabewert des Newsletters.
- Optimierung: Das Bildseitenverhältnis wird in die Berechnung der besten srcset-Größen für Hochformat-Produktkartenbilder basierend auf verschiedenen Themeneinstellungen berechnet.
- Optimierung: Verbesserung der Theme-Konfiguration.
- Optimierung: Zusätzliche Abfrage zur Anzeige des Hersteller-Tabs auf Produktdetailseiten hinzugefügt.
- Optimierung: Legt horizontale Abstände für die gesperrten Erlebniswelt Produktseiten Standardseite fest.
- Optimierung: Legt horizontale Abstände für gesperrte Erlebniswelt Kategorieseiten Standardseiten fest.
- Optimierung: Verhindert das Problem NEXT-9276 | Erlebniswelten Slider ungenau.
- Optimierung: Laden von Symbolen für Produktdetailfunktionen.
- Optimierung: Benutzerdefinierte Komponente hinzugefügt, um Konfigurationswarnungen anzuzeigen.
- Optimierung: Neuinitialisierung von Tooltip-Utilities bei der Initialisierung des Produkt-Sliders.
- Bugfix: Verbessert Floating-Labels, um zu verhindern, dass diese Zahlungsartenfelder überlagern.
- Bugfix: Verhindert, dass der Erlebniswelten Crossselling-Slider die Seite horizontal erweitert, wenn kein horizontaler Blockabstand angegeben ist.
- Bugfix: Fehlendes End-Div bei vertikaler Ausrichtung des Slider hinzugefügt.
- Bugfix: Footer Captcha Randradius rechts optimiert.

# 2.10.3
- Kompatibilität: Shopware 6.4.17

# 2.10.2
- Optimization: `ProductCrossSellingStreamCriteriaEvent` hinzugefügt, um Cover Switch im Cross-Selling-Stream zu ermöglichen. | Pro Version
- Bugfix: Verhindert die Neuerstellung des Bootstrap-Grids für ein Fünfer-Grid.

# 2.10.1
- Optimierung: Top-Bar Dropdown Aktiv-Status Farbe bei Buttons.
- Optimierung: Darstellung der Theme-Konfiguration Switch-Fields. | Pro Version
- Bugfix: CMS Teaser-Element konnte nicht positioniert werden. | Pro Version

# 2.10.0
- Feature: Neue Konfiguration-Option hinzugefügt, um Produkt-Listings in einem Fünferraster darzustellen.
- Feature: Neue Konfiguration hinzugefügt, um den Border-Radius für jedes Element des Bild-Text-Sliders festzulegen. | Pro-Version
- Feature: Neue Konfiguration hinzugefügt, um den Border-Radius für den Bild-Text-Slider festzulegen. | Pro-Version
- Feature: Neue Konfiguration hinzugefügt, um den vertikalen Abstand der Breadcrumbs festzulegen.
- Kompatibilität: Shopware 6.4.15 - Fix twig source path for icons.
- Kompatibilität: Schaltfläche zum Schließen der Overlay-Suche von `layout_header_search_input_group` nach `layout_header_search` verschoben, um Kompatibilität mit SasBlogModule herzustellen.
- Kompatibilität: Kompatibilität mit NetiNextAccessManager im Quickview hinzugefügt.
- Optimierung: Galerie-Raster Abstände.
- Optimierung: Verbesserung der Theme-Konfiguration.
- Optimierung: Übersetzung der CMS Teaser-Konfiguration.
- Optimierung: Placeholder-Farbe für Eingabefelder im Fokus.
- Optimierung: Zusätzliche Prüfung für die Service-Navigation im Footer Bottom.
- Optimierung: Galerie-Scroller und Galerie-Raster an das Galerie-Slider-Element anstatt an den CMS-Block gebunden.
- Optimierung: Sticky-Header Ausblenden Animation.
- Optimierung: Zusätzliche Abfrage zu Social-Media Icons in der Fußzeile.
- Optimierung: Refactoring von sw_includes und sw_extends `@Storefront` neuer Template-Dateien.
- Optimierung: Checkout minimal Header Layout Logo Position.
- Optimierung: Übergabe des aktuellen Slides an das Galerie-Scroller Zoom-Modal.
- Optimierung: Optimierte vertikale Position des Logos in der einzeiligen mobilen Kopfzeile und Standardsuche.
- Optimierung: Fallback für `zen-layout-container-width` in `box.html.twig` hinzugefügt.
- Optimierung: Verbessert die Cover Switch Bild ermittlung.
- Bugfix: Galerie-Scroller-Thumbnail-Navigation.
- Bugfix: Schriftarten werden jetzt auch geladen, wenn sie nicht in Anführungszeichen angegeben sind.
- Bugfix: Text-Transform des Produktnamens im Listing.
- Bugfix: Crossselling auf CMS-Seiten führt unter Umständen zu horizontalem Scrollen.

# 2.9.2
- Kompatibilität: Shopware 6.4.15 - CMS element data resolving mismatch | Pro version
- Kompatibilität: Shopware 6.4.15 - Add twig blocks for image to the product box card template
- Kompatibilität: Shopware 6.4.15 - Main variant visualisation NEXT-17544
- Bugfix: Galerie-Scroller und Galerie-Grid korrigiert.

# 2.9.1
- Feature: Ermöglicht Twig-Syntax für Variablen und Snippets im globalen Custom Tab | Pro version
- Bugfix: Behebt den Fehler `Unknown "template_from_string" function` error. | Cloud version

# 2.9.0
- Feature: Variantenwechsel im Quickview hinzugefügt. | Pro-Version
- Feature: Ermöglicht Twig-Syntax für Variablen und Snippets in benutzerdefinierten Feldern des Themes und eigenen Erlebniswelten Elementen. | Pro-Version
- Feature: Neue Konfiguration hinzugefügt, um YouTube-Video-Platzhalter-Thumbnails ein- / auszublenden.
- Optimierung: Erlaubt HTML-Syntax im Erlebniswelt Element Teaser Text.
- Optimierung: Quickview überarbeitet.
- Optimierung: Event zum Schließen der Quickview-Ansicht, beim Öffnen des Offcanvas-Warenkorbs.
- Optimierung: Verbessert die Animation beim Öffnen des Quickview-Modals.
- Optimierung: Floating Labels werden bereits bei Fokus hochgesetzt für bessere Benutzerfreundlichkeit.
- Optimierung: Optimierte Paginierungs-Pills bei größerer Basisschriftgröße.
- Optimierung: Schriftgröße der Preiseinheit der Produktkarte auf die Schriftgröße der Beschreibung gesetzt.
- Optimierung: Header-Padding zum minimalen Header im Checkout hinzugefügt.
- Optimierung: Cover-Switch Hover verbessert.
- Optimierung: Neuformatierung des SCSS-Codes.
- Optimierung: Verbesserungen beim Button Hover.
- Optimierung: Produkt-Aktionen im Listing.
- Optimierung: Refactoring von sw_includes neuer Templatedateien.
- Bugfix: Schriftgröße von Produktnummern in Listings korrigiert.
- Bugfix: Überprüfung auf Filterpanel-Elemente im Offene-Filter Plugin.

# 2.8.0
- Feature: Neue Konfiguration hinzugefügt, um den mobilen Header auf eine einzelne Zeile einzustellen.
- Feature: Neue Konfiguration hinzugefügt, um benutzerdefiniertes Javascript im Head hinzuzufügen.
- Feature: Neue Konfiguration hinzugefügt, um den Anzeigemodus der Registerkarten auf der Produktdetailseite auf einen Inhalts-Scroller einzustellen.
- Feature: Neue Konfiguration hinzugefügt, um benutzerdefinierte srcset-Größen für Produkt-Cards Produktbilder festzulegen.
- Feature: Berechnung der besten srcset-Größen für Produkt-Cards Produktbilder basierend auf verschiedenen Themeneinstellungen.
- Feature: Überarbeitete Darstellung von Produktaktionen.
- Feature: Neue Konfiguration hinzugefügt, um die Position der Wunschliste-Schaltfläche auf der Galerie festzulegen.
- Feature: Neue Konfiguration hinzugefügt, um die Zustimmung für Youtube-Videos zu erfragen im Video-Tab der Produktdetails.
- Feature: Neue Konfiguration hinzugefügt, um den Fallback der alt- und title-Tags der Image Gallery zu ändern.
- Optimierung: Sticky-Header-Offset verbessert, um Sticky-Header ohne Offset zu verwenden.
- Optimierung: Die Ausgabe von benutzerdefiniertem CSS- und JS-Code wurde verbessert.
- Optimierung: Überarbeitete Buttons.
- Optimierung: Lazy Loading für Slider nur im Cover-Modus verfügbar gemacht, da es sonst zu Problemen bei der Höhenberechnung kommen kann.
- Optimierung: Styling von Thumbnail-Steuerelementen der Image Gallery.
- Optimierung: Verbessert das Styling des Newsletter-Logos in der Fußzeile.
- Optimierung: Verbessert das Styling der Sidebar-Navigation.
- Optimierung: Verbessert die Subpixel der Galerie-Slider.
- Optimierung: Erweitert nun `base_body_script` anstatt `base_script_hmr_mode`
- Optimierung: Drop-down-Menü des Kontomenüs überarbeitet.
- Optimierung: Textdekoration Unterlinie zu hellem und dunklem Text in der CMS Hero-Section hinzugefügt.
- Optimierung: Hover-Hintergrundfarbe für Hauptnavigationselemente in transparenter Kopfzeile anzeigen.
- Optimierung: Block `zen_base_webfont` nach meta.html.twig verschoben, um Webfont Loader früher zu laden und FLOUT zu vermeiden.
- Optimierung: Verbesserte Abstände auf der Produktdetailseite.
- Optimierung: Verbessertes Styling von Offcanvas-Menüaktionen.
- Optimierung: Erlebniswelten Sektion Sidebar row auf `no-gutters` gesetzt.
- Optimierung: Verbesserte Produkt-Slider-Animation auf Mobilgeräten.
- Optimierung: Verbesserung verschiedener Darstellungen in der Storefront.
- Bugfix: Korrigiert abgerundete Ecken im Dropdown-Menü.
- Bugfix: Korrigiert die Breadcrumbs-Position einer Hero-Section.
- Bugfix: Korrigiert das Styling des Breadcrumb-Elements der Strukturkategorie.
- Bugfix: Behebt einen Javascript-Fehler bei der erweiterten Anzeige von Filtern.
- Bugfix: Dynamische Zeilenhöhe für Überschriften.
- Bugfix: Anzeigen von Galerie- und Buybox-Elementen außerhalb einer Produktseite.

# 2.7.2
- Feature: Neue Konfiguration hinzugefügt, um maximale Elemente so einzustellen, dass die Punkte-Navigation angezeigt werden.
- Optimierung: Horizontaler Abstand im Footer angepasst, um die Inhalte besser auszurichten.
- Optimierung: Footer Grid basiert nun auf Layout-Container-Abständen.
- Optimierung: Account Navigation angepasst.
- Optimierung: Anpassung der Farben im Account für dunkle Layouts optimiert.
- Optimierung: Verhindert, dass der Scroll-Up-Button die untere Fußzeilennavigation überlagert.
- Kompatibilität: `margin` zu `padding` in `cms-section-block-container.html.twig` geändert.

# 2.7.1
- Kompatibilität: Kompatibilität mit NetiNextEasyCoupon hergestellt.
- Optimierung: Veraltetes `@elseif` in `@else if` in SCSS geändert.
- Bugfix: Fallback-Wert für SCSS-Variable `zen-product-listing-card-big-img-height` geändert.

# 2.7.0
- Kompatibilität: Shopware 6.4.13 - Variable `maxPurchaseThreshold` in `selectQuantityThreshold` geändert.
- Kompatibilität: Shopware 6.4.13 - Wert der Variable `selectQuantityThreshold` auf 100 gesetzt.
- Kompatibilität: Shopware 6.4.13 - Merge Issue NEXT-9423 "Eingabetyp bei hoher Menge umschalten" mit eigener Eingabetyp-Funktionalität.
- Feature: Neue Konfiguration hinzugefügt, um die Abstände der Produktdetails festzulegen.
- Feature: "Sen" als neue Theme-Schriftart hinzugefügt.
- Feature: Neue Konfiguration hinzugefügt, um die Hintergrundfarbe des Produktbildes auf den Listing-Seiten zu aktivieren/deaktivieren.
- Feature: Neue Konfiguration hinzugefügt, um die Hintergrundfarbe des Produktbildes auf der Produktdetail-Seiten zu aktivieren/deaktivieren.
- Optimierung: Verschiedene CSS-Styling-Verbesserungen.
- Optimierung: Unterlängen im Produktnamen wurden teilweise abgeschnitten.
- Optimierung: Verbesserung des Aussehens des Dropdown-Menüs.
- Optimierung: Verbesserung der Bezeichnungen in der theme.json.
- Optimierung: Gesamtbewertungslink zu Bewertungen im Überschriftenbereich hinzugefügt.
- Optimierung: Optimiert den Wortumbruch der Produktdetail-Seiten Eigenschaftstabelle.
- Optimierung: Optimierte Anzeige des unteren Footers.
- Bugfix: Behebt ein Anzeigeproblem der CMS-Produktdetailseite im Zusammenhang mit der Sticky-Buybox.
- Bugfix: Behebt das Problem beim Öffnen der Cookie-Einstellungen Offcanvas von einem anderen Offcanvas heraus.

# 2.6.2
- Feature: Neue Konfiguration zur Einstellung der Dropdown Navigation Navigations-Ebenen.
- Optimierung: Positionskonstanten für CMS-Slots hinzugefügt. | Pro Version
- Optimierung: Zusätzliche Node Prüfung in Overlay Search Javascript-Plugin hinzugefügt.
- Bugfix: Route der Update-Links im Dashboard aktualisiert. | Pro Version

# 2.6.1
- Bugfix: Werte der Zusatzfelder für Produkte pro Zeile beim Listing Render Event hinzugefügt.

# 2.6.0
- Feature: Galerie Raster als neuen Anzeigemodus für die Produktdetailseite hinzugefügt.
- Feature: Neue Konfiguration hinzugefügt, um die Subnavigation als Dropdown-Menü anzuzeigen.
- Feature: Neue Konfiguration zum Stylen des Dropdown-Menüs hinzugefügt.
- Feature: Neue benutzerdefinierte Felder hinzugefügt, um benutzerdefinierte CSS-Klassen pro Kategorie hinzuzufügen.
- Feature: Neue benutzerdefinierte Felder hinzugefügt, um Labels in der Navigation hinzuzufügen.
- Feature: Neue benutzerdefinierte Felder hinzugefügt, um Produkte pro Zeile in der Kategorie zu ändern.
- Feature: Neue Konfiguration hinzugefügt, um die Mengenauswahl anzuzeigen oder auszublenden.
- Feature: Neue Konfiguration hinzugefügt, um die Service-Navigation unten in der Fußzeile anzuzeigen oder auszublenden.
- Feature: Neue Konfiguration hinzugefügt, um das Symbol zum Einklappen der Kopfzeile der Fußzeile zu ändern.
- Feature: Neue Konfiguration hinzugefügt, um die Schriftstärken von Basistext und Überschriften zu ändern.
- Feature: Neue Konfiguration hinzugefügt, um die maximale Bildhöhe des Produktbox-Layouts "Großes Bild" zu ändern.
- Feature: Verbessert die Adressanzeige im Checkout.
- Optimierung: Google Fonts Cookie Consent Manager-Integration. | Pro-Version
- Optimierung: Verbesserung der Hersteller-Tab-Abfrage.
- Optimierung: Verbesserung von Bezeichnungen in der theme.json.
- Optimierung: Block `base_noscript` als direktes Kind von body verschoben.
- Optimierung: Platz zwischen Breadcrumbs und Buybox hinzugefügt.
- Optimierung: Breadcrumb-Trenner hinzugefügt.
- Optimierung: Basis-Slider-Punktnavigation auf Mobilgeräten ausgeblendet.
- Optimierung: Unbenutzte Klassen `img-darken` und `img-lighten` entfernt.
- Optimierung: Cross-Selling `displayMode` von `minimal` auf `standard` geändert.
- Optimierung: Cross-Selling `boxLayout` von `standard` auf `minimal` geändert.
- Optimierung: Zusätzlicher Abstand zwischen Auflistung und Paginierung hinzugefügt, wenn der Abstand zwischen den Produktboxen gering ist.
- Optimierung: Verbesserte Platzierung von Labels und Bewertungen in der Produktbox.
- Optimierung: Disabled-Stil für deaktivierte Filteroptionen hinzugefügt.
- Optimierung: Der Menüscroller ist jetzt anklickbar, auch wenn das Flyout-Menü geöffnet ist.
- Optimierung: Verbessert die Darstellung der Mengeneingabe im Listing.
- Bugfix: Neuregistrierung von Floating-Labels Javascript im Checkout beim Ändern der Rechnungs-/Versandadresse in Pseudomodals.
- Bugfix: Galerie-Scroller auf CMS-Block "Bildergalerie und Kaufbox mit Produktnamen & Herstellerlogo" behoben | Pro-Version
- Bugfix: Set Footer Newsletter Basic Captcha max-width.
- Bugfix: Erweitert die Header-Opacity Abfrage, um den Vererbungswert korrekt anzuzeigen.
- Bugfix: Erweitert die Abfrage der Navigation-Opacity, um den Vererbungswert korrekt anzuzeigen.

# 2.5.4
- Kompatibilität: Kompatibilität mit Shopware 6.4.11
- Feature: Bereitstellung von Standardmedien für neue CMS-Blöcke | Pro Version
- Optimierung: Entfernt die neue Konfiguration `zen-sidebar-navigation-max-depth` zur Einstellung der Sidebar Navigation Navigations-Ebenen. Stattdessen wird die Konfiguration aus dem Verkaufskanal genutzt.
- Bugfix: Korrigiert `is--sidebar` Klasse, wenn Filter geöffnet dargestellt werden.

# 2.5.3
- Optimierung: Verbesserung der Preloader Javascript Initialisierung
- Optimization: Device detection für das `load`-Event hinzugefügt, um das von iOS unterstützte `pageshow`-Event zu verwenden
- Optimization: Device detection für das `unload`-Event hinzugefügt, um das von iOS unterstützte `pagehide`-Event zu verwenden
- Bugfix: Backward compatibility for strict comparison in twig

# 2.5.2
- Info: Child-Theme Update verfügbar (optional) - Besuche https://childtheme-update.zenit.design um mehr über Child-Theme Updates zu erfahren.
- Feature: Erlebniswelten Block Abstands-Klassen hinzugefügt.
- Feature: Neue Konfiguration hinzugefügt, um die Grundpreisanzeige auf Produktboxen zu aktivieren oder zu deaktivieren.
- Feature: Neue Konfiguration hinzugefügt, um den günstigsten Produktpreis auf Produktboxen zu aktivieren oder zu deaktivieren.
- Feature: Neue Konfiguration hinzugefügt, um Produktpreis-Ersparnis in % auf Produktboxen an verschiedenen Positionen anzuzeigen.
- Optimierung: Überarbeitete Preisanzeige in den Produktboxen.
- Optimierung: Blöcke zu `meta.html` hinzugefügt.
- Optimierung: Überarbeitung der `meta.html`.
- Optimierung: Der Standardwert von `textMarginRight` und `textMarginLeft` wurde auf 10 % geändert.
- Optimierung: Das Option-Label des Schriftgewichts "Schwarz – 900" in der Konfiguration des Erlebniswelten-Teaser-Elements wurde korrigiert.
- Optimierung: Verbesserung der Overflow-Darstellung des Erlebniswelten Teaser Elements in der Administration.
- Optimierung: Verbesserung der Dot-Navigation Außen im Erlebniswelten Bild Text Slider Element in der Administration.
- Optimierung: HTML-Ausgabe im Features-Element der Erlebniswelten zulassen.
- Optimierung: Überarbeitung der Überlagerung bestimmter vordefinierter Blöcke bei Header-Überlagerung.
- Optimierung: Überarbeitung der Styles für Produktdetailseite und CMS-Produktdetailseite.
- Optimierung: Erhöhung der Responsive-Font-Skalierung für Anzeigeklassen von Bild Text Slider Elementen.
- Optimierung: Überarbeitung der Zoom Modal-Hintergrundfarbe.
- Optimierung: Entfernt den unteren Außenabstand des Breadcrumb-Containers.
- Optimierung: Verbesserung der Styles für die Produktbewertung in Listings.
- Optimierung: Verbesserungen in der Theme-Konfiguration.
- Optimierung: Verbesserung des Flyout-Menüs.
- Bugfix: Anzeige des Produktbild-Platzhalters in Firefox korrigiert.
- Bugfix: Behebt das Anzeigeproblem im Zoom Gallery Modal.
- Bugfix: Korrigiert eine Abfrage, um Paddings im Card-Body der Produktboxen anzuzeigen.

# 2.5.1
- Optimierung: Zusätzliche Überprüfung für die Darstellung Header Kategoriebild Hero-Sektion hinzugefügt.
- Optimierung: Verbesserung des Main-Navigation-Scroller Fadeout-Bereichs.
- Optimierung: Verbesserte Darstellung der Spalte des Bild Text Sliders, wenn mehrere Elemente angezeigt werden. | Pro Version
- Optimierung: Verbesserung der Darstellung der Teaser-Elemente. | Pro Version
- Optimierung: Verbesserung der Darstellung von Hover-Animationen beim Teaser-Element, wenn keine URL gesetzt ist. | Pro Version
- Optimierung: Verbesserung der `has-bg-opcaity`-Klasse Bedingung.
- Bugfix: Setzen der Standardwerte beim Hochladen von Bildern im Bild Text Slider korrigiert. | Pro Version

# 2.5.0
- Info: Child-Theme Update verfügbar (optional) - Besuche https://childtheme-update.zenit.design um mehr über Child-Theme Updates zu erfahren.
- Feature: CMS-Element "Bild Text Slider" hinzugefügt | Pro Version
- Feature: CMS-Element "Galerie und Buybox mit Produktname & Hersteller-Logo" hinzugefügt | Pro Version
- Feature: CMS-Element "Teaser" hinzugefügt | Pro Version
- Feature: CMS-Block "Teaser - Eine Spalte" hinzugefügt | Pro Version
- Feature: CMS-Block "Teaser - Zwei Spalten" hinzugefügt | Pro Version
- Feature: CMS-Block "Teaser - Drei Spalten" hinzugefügt | Pro Version
- Feature: CMS-Block "Teaser - Vier Spalten" hinzugefügt | Pro Version
- Feature: CMS-Block Grid "Eine Spalte" hinzugefügt
- Feature: CMS-Block Grid "Zwei Spalten" hinzugefügt
- Feature: CMS-Block Grid "Drei Spalten" hinzugefügt
- Feature: CMS-Block Grid "Vier Spalten" hinzugefügt
- Feature: CMS-Block Grid "Fünf Spalten" hinzugefügt
- Feature: CMS-Block Grid "Sechs Spalten" hinzugefügt
- Feature: CMS-Block Grid "Zwei Spalten - 9/3" hinzugefügt
- Feature: CMS-Block Grid "Zwei Spalten - 3/9" hinzugefügt
- Feature: CMS-Block Grid "Zwei Spalten - 8/4" hinzugefügt
- Feature: CMS-Block Grid "Zwei Spalten - 4/8" hinzugefügt
- Feature: CMS-Block Grid "Zwei Spalten - 7/5" hinzugefügt
- Feature: CMS-Block Grid "Zwei Spalten - 5/7" hinzugefügt
- Feature: CMS-Block Grid "Drei Spalten - 6/3/3" hinzugefügt
- Feature: CMS-Block Grid "Drei Spalten - 3/3/6" hinzugefügt
- Feature: CMS-Block Grid "Drei Spalten - 3/6/3" hinzugefügt
- Feature: CMS-Block Grid "Drei Spalten - 2/8/2" hinzugefügt
- Feature: CMS-Block Layout "Einfaches Layout" hinzugefügt | Pro Version
- Feature: CMS-Block Layout "Einfaches Layout umgekehrt" hinzugefügt | Pro Version
- Feature: CMS-Block Layout "Einfaches Teaser Layout" hinzugefügt | Pro Version
- Feature: CMS-Block Layout "Einfaches Teaser Layout umgekehrt" hinzugefügt | Pro Version
- Feature: Benachrichtigung für Child-Theme Update hinzugefügt | Pro Version
- Feature: Zusatzfelder für Landingpages hinzugefügt | Pro Version.
- Feature: Neue Konfiguration zur Darstellung eines TikTok Icons als Social Media Icon hinzugefügt.
- Feature: Neue Konfiguration zur Einstellung der Sidebar Navigation Navigations-Ebenen.
- Feature: Neue Konfiguration zur Einstellung der Flyout Navigation Navigations-Ebenen.
- Feature: Darstellung von Varianten Merkmale im Quickview hinzugefügt.
- Feature: Main Navigation Menu-Scroller hinzugefügt.
- Optimierung: Theme Dashboard zum Erweiterungen Menu hinzugefügt.
- Optimierung: Theme Einstellungen zum Erweiterungen Menu hinzugefügt.
- Optimierung: Konfiguration der Produktbild Überlagerung zum Tab 'Allgemein' in der Theme-Konfiguration verschoben.
- Optimierung: Produktbild Farbüberlagerung optimiert, um Subpixel-Darstellungen zu vermeiden.
- Optimierung: Hintergrundfarbe zum Image Zoom hinzugefügt, um transparente PNG besser zu unterstützen.
- Optimierung: Download-Links von der Preloader-Animation ausgeschlossen.
- Optimierung: Newsletter Privacy `_key` Variablen durch Übergabe im Include-Befehl hinzugefügt.
- Optimierung: Layout-Modus Standard für den Galerie-Slider optimiert.
- Optimierung: Verhindert, dass Produkt-Slider Pfeile abgeschnitten werden.
- Optimierung: Verhindert, dass Produkt-Slider-SPfeile in mobilen Browsern blau umrandet werden.
- Compatibility: Laut Telemediendatenschutzgesetz dürfen die Buttons eines Cookie-Banners nur in derselben Farbe und Größe dargestellt werden.
- Compatibility: Behebt die Kompatibilität des Features-Elements in Verbindung mit dem Moorl Foundation Plugin.
- Bugfix: Behebt CMS-Element Breadcrumbs horizontale Ausrichtung.
- Bugfix: Blendet die Preloader-Animation aus, wenn wir im Beforeunload-Ereignis stecken bleiben.

# 2.4.7
- Optimierung: Verhindert, dass Textfarbe der Filter durch Text Kontrast Einstellungen einer Hero-Section beeinflusst werden.
- Optimierung: Fügt eine neue Abfrage hinzu, welche die Darstellung von Mengenauswahl im Listing zu Mengeneingabe wechselt, sollte die maximale Auswahlmenge 1000 überschreiten.
- Optimierung: Erzeugt Copyright Jahr mit twig date Function.
- Bugfix: Korrigiert eine Abfrage zum Überschreiben der "Kategoriebild anzeigen" Einstellung aus der Theme-Konfiguration.
- Bugfix: Behebt die Fehlermeldung incompatible units px and rem bei einer bestimmten Konfiguration.
- Bugfix: Revision of CMS Element Resolver decorator | Pro Version.

# 2.4.6
- Feature: Neue Konfiguration hinzugefügt, um Produktfeatures auf der Produktdetailseite anzuzeigen.
- Optimierung: Input readonly und Input disabled Farben festgelegt.
- Optimierung: Klasse `mr-1` bei der Suche entfernt
- Optimierung: Tooltip-Initialisierung der Shop-Navigation.
- Optimierung: Shop-Navigation und Top-Bar Übergangsanimationen.
- Optimierung: Farbkontrast Wunschliste für die Überschrift.
- Optimierung: Verbesserte Positionierung von Produkt-Slider Controls.
- Bugfix: Position der Shopnavigation im Header.

# 2.4.5
- Feature: Cover-Switch-Funktionalität für CMS-Elemente hinzugefügt.
- Feature: Möglichkeit hinzugefügt, Texte aus der Konfiguration zu übersetzen.
- Feature: Neues Konfigurationsfeld für zusätzliche CSS-Dateien zur Theme-Plugin-Konfiguration hinzugefügt.
- Feature: Neues Konfigurationsfeld für die aktive Farbe des Filterrahmens hinzugefügt.
- Optimierung: Fügt `$css-relative-bundles-path` zu Bundles Assets-Paths in SCSS hinzu, da `$css-relative-bundles-path` die Domain enthält, die von der Administration aufgerufen wird, die wiederum eine andere Domain als die des Verkaufskanals sein kann.
- Optimierung: Verbesserung in der Administration des Themes | Pro Version.
- Optimierung: Verbessert Fehldarstellungen der Theme-Konfiguration, die nach Update 6.4.8.0 auftreten, bis Shopware das Problem selbst löst | Pro Version.
- Optimierung: Fügt die Theme-Konfiguration Block-Titel hinzu, die nach Update 6.4.8.0 fehlen, bis Shopware das Problem selbst löst - NEXT-20077
- Optimierung: Reduziert die minimalen Höhen des Galerie-Sliders auf den Standardwert von 430 Pixel.
- Optimierung: Verbesserung der Bezeichnungen in der theme.json.
- Optimierung: Verhindert, dass der Rand eines Produkts vom linken inaktiven Element in den sichtbaren Teil des Produkt-Sliders scheint.
- Optimierung: Verbessert den Textkontrast der Zahlungsmethodenbeschreibung im Checkout.
- Optimierung: Kleine Abstände zu Header Grid-Spalten hinzugefügt.
- Optimierung: Button border-radius zur Main-Navigation hover-0 hinzugefügt.
- Optimierung: Ausblenden der Standard-Breadcrumbs auf CMS-Produktseiten, wenn benutzerdefinierte Zenit-Breadcrumbs verwendet werden.
- Optimierung: Optimiert die Breite der Header Icon-only Buttons.
- Bugfix: Außenabstände in layout-container-negative-vertical-margin für mobile Geräte hinzugefügt.
- Bugfix: Behebt die Darstellung der Farben der Paginierung.
- Bugfix: Platzhalter im Galerie-Slider werden nun korrekt anzeigen.
- Bugfix: Behebt ein Anzeigeproblem der Floating-Labels mit dem Custom Products-Plugin.
- Kompatibilität: Verhindert, dass Produkt-Slider-Controls und Artikel aufgrund von Änderungen im Shopware-Update 6.4.8.0 abgeschnitten werden

# 2.4.4
- Child-Theme Update verfügbar (erforderlich): Bei Nutzung eines unserer Child-Themes Vorlagen Sets bieten wir auch ein Update des Child-Themes auf Version 2.4.4. Dieses Child-Theme Update-Paket ist kumulativ und beinhaltet ein Kompatibilitäts-Update für Shopware 6.4.8.0. Unsere Child-Themes kannst Du hier kostenlos herunterladen: https://themes.zenit.design Bitte beachte den Update-Guide, sollten individuelle Programmierungen im Child-Theme vorgenommen worden sein: https://themedocs-sw6.zenit.design/vorlagen#updates
- Kompatibilität: Kompatibilität mit Shopware 6.4.8.0
- 
# 2.4.3
- Feature: Neue Konfiguration zum Anzeigen eines Externer-Link Icons zur Main Navigation und Flyout-Navigation hinzugefügt.
- Feature: Neue Konfiguration zur Anzeige der Meta-Beschreibung anstelle der Produktbeschreibung im Produkt-Listing Layout Typ Standard hinzugefügt.
- Feature: Schließen-Icon bei der ausklappbaren Suche hinzugefügt.
- Feature: Die ausklappbare Suche schließt nun zusätzlich beim Klick außerhalb der Suche.
- Optimierung: Setzt den Cursor auf den Standardwert bei Struktur-Elementen der Hauptnavigation.
- Optimierung: Die Darstellung von CMS-Elementen auf Kategoriebildern im Header wurde verbessert.
- Optimierung: Die Darstellung von Floating Labels bei Auswahlfeldern bei Kategoriebildern im Header wurde verbessert.
- Optimierung: Die Darstellung von Floating Labels bei Auswahlfeldern wurde verbessert.
- Optimierung: Verbessert die hover-1 Klammer Farbe.
- Optimierung: Anpassungen für Bootstrap-Responsive-Tabellen.
- Optimierung: Die Darstellung der Produktaktionen im Listing wurde verbessert.
- Optimierung: Verbesserte Main-Navigation Hover Effekte.
- Optimierung: Anzeige des Herstellerlogos verbessert.
- Optimierung: Die Anzeige von horizontalen Innenabständen von abgerundeten Schaltflächen und abgerundeten Eingabefeldern wurde verbessert.
- Optimierung: Verbesserung der Option für die Deckkraft des Header-Hintergrunds bei Theme-Farben, die bereits eine Transparenz beinhalten.
- Optimierung: Überarbeitung des Subscribers für Bildwechselfunktion im Listing. | Pro Version
- Optimierung: Eine Funktion zum Laden des Plugin-Namens in sw-theme-manager-detail wurde entfernt.
- Optimierung: Verhindert ein Problem beim Einpassen des Produktbildes der Produktbox, wenn ein Produktbildrand definiert wurde.
- Bugfix: Die Anzeige abgerundeter Ecken in Textareas wurde verbessert.
- Bugfix: Verbesserung der Preloader-Darstellung beim Zurücknavigieren in der Browser-History.

# 2.4.2
- Feature: Neue Konfiguration für Seitenverhältnis beim Zoomen beibehalten hinzugefügt, die in SW 6.7 eingeführt wurde.
- Feature: Neue Konfiguration zur Anzeige eines Detail-Buttons für Variantenartikel im Listing aufgrund des SW-Tickets NEXT-19146 anzuzeigen.
- Feature: Neue Konfiguration hinzugefügt, um den Preloader Timeout zu ändern.
- Feature: Neue Konfiguration hinzugefügt, um den Kontrastschwellenwert zu ändern.
- Optimierung: Umbenennung von `preloader.html.twig` in `zen-preloader.html.twig`
- Optimierung: Unnötige ID bei der Mengeneingabe entfernt.
- Optimierung: Verbesserung der Code-Qualität anhand der Code quality analysis.
- Optimierung: Setze den Standardwert für die Mengeneingabe -/+ auf die Mindestbestellmenge.
- Optimierung: Btn-Icon Transitions hinzugefügt.
- Optimierung: Hinzufügen von Layout-Innenabständen zum Header-Container bei Full-Width-Header Layouts.
- Optimierung: Entfernen von Layout-Innenabständen im Footer.
- Optimierung: Verbesserung von Bezeichnungen in der theme.json
- Optimierung: Verbessert die Darstellung des Marketing-Sliders, wenn Webfonts geladen wurden.
- Optimierung: Verbessert den Stacking-Kontext der Buybox bei Sticky-Option.
- Optimierung: Verhindert, dass die Produkte untereinander angezeigt werden, bis das Produkt Slider Javascript geladen und der Slider initialisiert ist.
- Optimierung: Überarbeitung der CustomFields-Definitionen.
- Optimierung: Verbessert die Darstellung der Mengeneingabe im Listing bei Überlagerung des Produktbildes.
- Optimierung: Angleichung der Innen- und Außenabstände der CMS Layouts zwischen CMS Editor und CMS Storefront.
- Optimierung: Optimiert die Darstellung des Datenschutz-Hinweises im Footer Newsletter - Hinweis erscheint erst bei Eingabe und verhindert Hüpfen des Footers

# 2.4.1
- Feature: Neue Konfigurationsoption für Preloader hinzugefügt.
- Optimierung: Verbessert den Preloader beim Seitenwechsel.
- Optimierung: Verbesserung verschiedener Kontrastfunktionen im Inhalt der Produktdetails-Tabs.
- Optimierung: Kontrastfarbfunktion für Gutscheineingabe.
- Optimierung: Ausrichtung der Top Bar Icons.
- Optimierung: Gestaltung von account-menu-offcanvas auf dunklen Offcanvas-Hintergründen.
- Optimierung: Hinzufügen von `#{$sw-asset-theme-url}` zu Bundles Assets-Paths in SCSS.
- Optimierung: Verwendung der Twig-Block-Funktion, um unveränderte Eltern-Blöcke anzuzeigen.
- Optimierung: Unnötige defaultValue-Elemente in config.xml entfernt.
- Bugfix: Verhindert horizontales Scrollen auf Mobilgeräten aufgrund der minimalen Breite des Grid gutters.
- Bugfix: Behebt ein Problem bei den anpassbare Links in Kategorien.

# 2.4.0
- Feature: Neue Konfigurationen für die Farben der Paginierung hinzugefügt.
- Feature: Neue Konfigurationen für Produkt-Slider-Steuerelemente hinzugefügt.
- Feature: Neue Konfiguration für Breadcrumbs-Schriftgröße hinzugefügt.
- Feature: Neue Konfiguration für Schriftgewicht der aktiven Hauptnavigation hinzugefügt.
- Feature: Neue Konfigurationen für Sprachwechsler hinzugefügt.
- Feature: Position sticky zur CMS-Buybox hinzugefügt.
- Feature: Galerie-Scroller als neuer Anzeigemodus für die Galerie hinzugefügt.
- Feature: Neue Konfiguration für Meta theme-color hinzugefügt.
- Optimierung: Optimierung des Sticky-Header-Offsets für das Unstick-Ereignis beim Hochscrollen.
- Optimierung: Verbessert die Positionierung von Eingabe-Labels im Floating-Labels-Modus.
- Optimierung: Auslassungspunkte für die floating Labels hinzugefügt, um mehrzeilige Labels zu verhindern.
- Optimierung: Fußzeilen-Spaltenabstände verbessert.
- Optimierung: Neue Update Methode zum Aktualisieren der base_config von Theme-Duplikaten aufgrund von Issue NEXT-10994
- Optimierung: Produkt-Slider Innenabstände verbessert.
- Optimierung: Cookies Ablehnen-Button für eine bessere Benutzerfreundlichkeit auf btn-link gesetzt.
- Optimierung: Verbesserung der Theme-Konfiguration Footer Spaltenbreiten-Auswahl Sortierung.
- Optimierung: Verbesserung der Theme-Vererbung in theme.json.
- Optimierung: Horizontalen Innenabstand zum Full-width Header hinzugefügt.
- Bugfix: Korrigiert die Anzeige der Mengeneingabe auf kleinen Produkt-Cards.
- Bugfix: Behebt die Anzeige der Mengeneingabe auf kleinen mobilen Geräten im Kassenbereich.

# 2.3.3
- Feature: Neue Konfiguration hinzugefügt, um die Detail-Buttons in Listings anzuzeigen, auch wenn die Option Kaufenbutton in Produktlistings anzeigen in Einstellungen > Produkte deaktiviert ist.
- Optimierung: Hinzufügen einer service-menu-widget.html.twig Datei, um das Servicemenü in zukünftigen Versionen beizubehalten.
- Optimierung: Reduzieren der Größe des Hilfe-Icons in der Top Bar.
- Optimierung: Verhindert, dass der Quickview-Link in einem neuen Fenster geöffnet wird.
- Optimierung: Hinzufügen von light-text-muted Farbe in Offcanvas Warenkorb Elementen.
- Optimierung: Verbessern der Mengeneingabe Button Textfarben auf verschiedenen Elementen.
- Optimierung: Verbesserung der Theme-Konfigurationslabels.
- Optimierung: Optimierung des Sticky-Header-Offsets für das Unstick-Ereignis beim Hochscrollen.
- Optimierung: Optimiert eine Seitenleisten-Navigationsabfrage, wenn`zen-sidebar-navigation-active-bg` Variable transparent ist;
- Optimierung: `Normal - 400` in `Regular - 400` umbenannt, um die Benennung in theme.json zu standardisieren.
- Optimierung: Unnötige `footer-contact`-Klassen in Fußzeilenspalten entfernt.
- Optimierung: Setzen von Fallback-Farben für den modalen Zoom-Hintergrund, wenn `zen-product-listing-card-img-bg` transparent ist.
- Optimierung: Setzen des linken Abstandes der cms section sidebar main content auf 0, damit ein gleichmäßigerer Abstand zwischen der Seitenleiste und dem Hauptinhalt entsteht.
- Kompatibilität: Entfernen des Overrides der `$app-css-relative-asset-path` aufgrund von Shopware Issue NEXT-10560 von Version 2.1.0, da Shopware das Problem nun selbst gelöst hat.
- Kompatibilität: Behebt ein Problem aufgrund der neuen Funktion in Issue NEXT-16879, bei der Assets() die Symfony Flysystem-Versionsstrategie verwenden und der PDF-Viewer die URL nicht mehr korrekt zusammensetzen konnte.
- Bugfix: Behebt ein Problem mit der Fehlermeldung `Argument 1 passed to Shopware\\Core\\Framework\\Uuid\\Uuid::isValid() must be of the type string` bei verwaisten Konfigurationswerten.
- Bugfix: Korrigiert die Anzeige der Mengeneingabe auf kleinen mobilen Geräten.

# 2.3.2
- Feature: Hinzufügen einer neuen Konfiguration für Containerabstände.
- Optimierung: Überarbeitung der Containerabstände.
- Optimierung: Überarbeitung der Parameter Containerabstand Mixins um zwei separate Werte aufzunehmen.
- Optimierung: Verbessert die Logo-Platzierung, wenn die Höhe größer als 100% ist
- Optimierung: Verbessert die Logo-Platzierung mit `object-fit`, um eine korrekte Anzeige von SVG ohne Initialmaß zu gewährleisten.
- Optimierung: Klassenname in Breadcrumbs cms-Element in der Administration umbenannt.
- Optimierung: Abstand zwischen `.product-detail-tab-navigation` und `.product-detail-tabs-content` hinzugefügt, wenn Hintergrundfarbe und Tabs-Darstellung nicht auf Tabs gesetzt ist
- Optimierung: Verbesserung von Labels in der Theme-Konfiguration.
- Optimierung: Verbesserung der Hilfetexte in der Theme-Konfiguration.
- Optimierung: Fügt eine Abfrage hinzu, um den Tab Eigenschaften anzuzeigen.
- Optimierung: Buttons werden nun aus Footer-Link-Stylings nicht mehr überschrieben.
- Optimierung: Platz zwischen Header und Sticky Buybox hinzugefügt.
- Optimierung: Neue Tabellen-Akzentfarbe für dunkle Themes hinzugefügt.
- Optimierung: Verbesserung des Zoom-Modal-Layouts.
- Optimierung: Breadcrumbs, die ein Bild überlagern, erhalten keine Hintergrundfarbe mehr.
- Optimierung: Einige Font-Weight-Variablen hinzugefügt, die Bootstrap nicht liefert.
- Optimierung: Hauptnavigation aktive Schriftstärke auf `semi-bold` geändert.
- Optimierung: Aktive Breadcrumbs font-weight auf Konfigurationswert geändert.
- Optimierung: Einige IE11-Fixes für Sticky Elements und Floating Labels hinzugefügt.
- Optimierung: Top-Abstand zu sticky `.checkout-aside-container` hinzugefügt wegen Sticky Header.
- Optimierung: Verbesserte Auswahlfelder für Floating Labels, wenn keine Option ausgewählt ist.
- Optimierung: Standardhintergrundfarbe der Hero-Sektion auf `transparent` geändert.
- Optimierung: Klassen mit `--` in `-` umbenannt wegen des Codestils.
- Optimierung: Verbesserte Preloader Logo-Animation und Logo-Darstellung mit `object-fit`.
- Optimierung: Verbesserte Offcanvas Logo-Anzeige mit `object-fit` und Header-Logo-Höhenkonfiguration.
- Optimierung: Verbesserte Footer-Logo-Anzeige mit `object-fit` und Header-Logo-Höhenkonfiguration.
- Bugfix: Verwendung der Variable `$zen-footer-custom-column-color` hinzugefügt, da sie nie verwendet wurde.
- Bugfix: Überarbeitung einer Abfrage, um den Schließen-Button der Top Bar anzuzeigen.

# 2.3.1
- Bugfix: Korrigiert die Darstellung der Optionen von Auswahl-Elementen bei der Verwendung der Funktion Floating Labels.

# 2.3.0
- Feature: Floating Labels für Form-Elemente
- Feature: Hinzufügen einer Konfiguration für Zoom Lupe über Galerie
- Feature: Hinzufügen eines neuen Konfiguration-Wertes für Produkt-Karten Action-Positionen
- Feature: Hinzufügen einer Konfiguration für die Produkt-Karten Aufmerksamkeits-Animation bei Mouseover
- Feature: Hinzugefügt minified pdf-viewer/-renderer.
- Feature: Hinzufügen einer neuen Konfiguration für Produkte pro Zeile für kleine Smartphones
- Feature: Hinzufügen einer neuen Konfiguration für die vertikalen Innenabstände des Hauptinhalte-Containers
- Feature: Hinzufügen einer neuen Konfiguration um Breadcrumbs auf volle Breite zu setzen
- Feature: Hinzufügen eines Schließen-Icons zu ein- und ausklappbaren Top Bar
- Optimierung: Sticky Buybox prüft nun, ob die Fensterhöhe größer als die Buybox-Höhe ist
- Optimierung: Vermeidet das Durchblitzen des Hintergrunds bei Produktbildern mit Hintergrundüberlagerung aufgrund von Pixelungenauigkeiten bei Elementen mit Randradius.
- Optimierung: Verbesserung der Produktkarten Innenabstände bei unterschiedlichen background-color Kombinationen
- Optimierung: Verbesserung der Theme-Konfigurationstexte.
- Optimierung: Setzen des Galerie Slider Rasterabstands auf 0, auf Grund von der Farbe in zen-product-listing-card-img-bg welche durch das Raster durchblitzte.
- Optimierung: Entfernen der zusätzlichen Abfrage auf `product.childCount` für den Kaufen-Button im Listing, sodass aufgefächerte Varianten den Kaufenbutton anzeigen können.
- Optimierung: Verbesserung des Hilfetextes für die Schrift-Einstellungen.
- Optimierung: Verhindert das Abschneiden von Box-Shadows in Produktkarten des Produktsliders.
- Optimierung: Entfernen überflüssiger Anführungszeichen bei @if-Statements in SCSS
- Optimierung: Stellt nun sicher, dass die Galeriebild-Slider-Konfiguration für Produktseiten nur für Bild-Slider der Produktseite greifen
- Optimierung: Einstellungen für das Seitenverhältnis von Produktbildern in den Allgemein-Tab verschoben
- Optimierung: Anpassung der Initialisierung des Javascript-Plugins, das zu ungültigen Formularelementen scrollt.
- Optimierung: Verbesserung der Hintergrundfarbe des Overlay-Suche Button Loaders
- Bugfix: Mengenänderung im Checkout Quickview Modal
- Bugfix: Darstellung der Vorschauansicht des Breadcrumb-CMS-Elements
- Bugfix: Behebt das Problem der nicht bearbeitbaren Rahmenfarbe für Produktboxen
- Bugfix: Korrektur des zen-product-gallery-slider-display-mode Standard-Werts

# 2.2.2
- Optimierung: Überarbeitung der Bildüberlagerung im Listing, sodass bei Mouseover das Titelbild hinter dem zweiten Bild verschwindet.
- Optimierung: Korrigiert die Anzeige des Breadcrumb-Hintergrundes, sodass sie sich nur über die Breite der Breadcrumbs erstrecken.
- Optimierung: Überarbeitung der Animation Hover 5 der Main Navigation (Kategorien).
- Bugfix: Korrektur der Text Ausrichtung für Produktpreise im Listing
- Bugfix: Korrektur der Quickview Input-Style Abfrage
- Bugfix: Korrektur des maxPurchase Wertes von maxQuantity zu calculatedMaxPurchase

# 2.2.1
- Optimierung: Darstellung der Mengenauswahl in Produkt-Listings
- Optimierung: Transparenter Header auf mobilen Geräten
- Optimierung: Korrektur eines Übersetzungsfehlers in der theme.json
- Optimierung: Verbesserung von Bezeichnungen in der theme.json
- Optimierung: Gallery Slider Weite mit Höhen-Konfiguration zusammengelegt
- Bugfix: Korrektur der Produkt-Slider Style Abfrage

# 2.2.0
- Feature: Hinzufügen einer Konfiguration zu Anzeige der Produktnummer im Listing
- Feature: Konfiguration hinzugefügt, um den Stil der Mengenauswahl auf -/+ Eingabe zu ändern
- Feature: Integriertes Lazy-Loading von Bildern auf Browserebene
- Feature: Hinzufügen einer Konfiguration für Produkt-Slider-Layout hinzugefügt, um zwischen dem Standard und erweitertem Modus zu wählen. Der erweiterte Modus zeigt die übergelaufenen Elemente an.
- Feature: Hinzufügen einer Konfiguration für die Breite der Produktdetails der Bildergalerie hinzugefügt
- Feature: Hinzufügen einer Konfiguration für den Anzeigemodus der Produktdetails-Bildergalerie hinzugefügt
- Feature: Hinzufügen einer Konfiguration für Produktdetails Bildergalerie Pfeilnavigationsposition
- Feature: Hinzufügen einer Konfiguration für Produktdetails Bildergalerie Punkte Navigationsposition
- Feature: Hinzufügen einer Konfiguration für Produktdetails Bildergalerie Vorschau-Navigation Position
- Feature: Hinzufügen einer Konfiguration für Produkt Detailseite Image Gallery Zoom
- Feature: Hinzufügen einer Konfiguration für Produkt Detailseite Image Gallery Fullscreen Gallery
- Feature: Hinzufügen einer Konfiguration für Produkt Detailseite Hintergrundfarbe
- Feature: Hinzufügen einer Konfiguration für Produkt Detailseite Tabs Hintergrundfarbe
- Feature: Hinzufügen einer Konfiguration für Produkt Detailseite Tabs Inhalte Hintergrundfarbe
- Feature: Hinzufügen einer Konfiguration für Produkt Detailseite Produktname Texttransform
- Feature: Hinzufügen einer Konfiguration für Produkt Listing Cards Produktname Texttransform
- Feature: Hinzufügen einer Konfiguration für Newsletter Position über dem Footer
- Feature: Hinzufügen einer Konfiguration für Footer Innenabstände
- Feature: Hinzufügen einer Konfiguration für Footer Rahmen
- Feature: Hinzufügen einer Konfiguration für Header Rahmen
- Feature: Hinzufügen einer Konfiguration für Listing Actions Rahmen
- Feature: Hinzufügen einer Konfiguration für Base Slider Navigation Farben im Modus Anzeige Außen, welcher mit SW 6.4 eingeführt wurde
- Feature: Position Sticky zur Buybox hinzugefügt
- Optimierung: Footer Konfiguration in theme.json überarbeitet
- Optimierung: Titel in SVG-Images entfernt
- Optimierung: Corrects the display of the slider arrows of product sliders if an alternative display of slider arrows was selected.
- Optimierung: Korrigiert die Anzeige der Slider Pfeile von Produkt-Slidern, wenn eine alternative Darstellung von Slider Pfeilen gewählt ist.
- Optimierung: Umbenennung `Font Align` in `Text align` in der theme.json.
- Optimierung: Umbenennung `Settings` in `Einstellungen` in der Administration.
- Optimierung: Anpassung der Schriftfarben von `payment-method-description` und `shipping-method-description` auf Grund von problematischen Farbgebungen im Shopware Default Theme
- Optimierung: Überarbeitung des Suchlayouts "expanded", um Overflow-x nicht mehr im page-wrapper zu verwenden, damit position sticky funktioniert.
- Optimierung: Neue Abfrage ob ein Produkt Cross-Selling Artikel besitzt
- Optimierung: Überarbeitung des Subscribers für Produkt-Listing Medien
- Optimierung: Überarbeitung einer if-Abfrage für die Kategorie-Navigation
- Optimierung: Der icon-style "square" erhält nun den border-radius aus der Button-Konfiguration
- Optimierung: Navigationselemente sind jetzt wieder aktiv, wenn sie sich im aktiven Pfad befinden
- Bugfix: Behebt den Wert Text-transform bei Filter-Panels
- Bugfix: Behebt eine falsche Variable, die verhindert, dass das Feature-Element angezeigt wird.

# 2.1.2
- Feature: Hinzufügen einer Konfiguration für wesentliche Merkmale zur Anzeige auf der Produktdetailseite.
- Optimierung: Änderung einiger Konfigurationen `"type": "switch"` in `"type": "bool"` in der theme.json.
- Optimierung: Änderung der Konfiguration `"type": "checkbox"` in `"type": "bool"` in der theme.json.
- Optimierung: Darstellung des Marketing-Text-Sliders auch bei einzeiligen Inhalten.
- Optimierung: Umbenennung `Mindesthöhe` zu `Minimale Höhe` in theme.json.
- Optimierung: Verbesserung der CMS Breadcrumbs border bottom.
- Optimierung: Behebt das Verschwinden der Pfeile in Select-Felder bei Mouseover.
- Optimierung: Verbesserung der Darstellung des Warenkorb-Buttons im Listing bei deaktivierter Mengenauswahl.
- Optimierung: Verbesserung der Innenabstände von Produktboxen bei aktiviertem Schatten.
- Optimierung: Verbesserung der Innenabstände von Produkt-Actions bei inaktiven Schatten oder Rahmungen.
- Optimierung: Verbesserung der Darstellung des Merken-Icons in Produktboxen bei inaktiven Schatten oder Rahmungen.
- Optimierung: Austauschen des Service/Help Icons für das Feather Old Icon Set.
- Optimierung: Verbesserung der Darstellung der border-radius in der Sidebar, wenn der aktive Pfad dieselbe Hintergrundfarbe besitzt wie Shop-Hintergrund oder Container Hintergrund.
- Optimierung: Verhindert, dass Schatten von Produktboxen abgeschnitten werden.  
- Optimierung: Input Placeholder auf 50% Sichtbarkeit reduziert.  
- Optimierung: Verhindern den Twig Error "Division by zero", wenn CMS Features-Element verwendet, aber nie konfiguriert wurde.
- Bugfix: Behebt eine Fehldarstellung des Galerie Sliders bei fehlender Konfiguration bei veraltetem Child-Theme Set durch Setzen eines Fallback-Wertes.

# 2.1.1
- Optimierung: Entfernen unnötiger Referenz zu SnippetFiles, dank der Auto-Registration.
- Optimierung: Rechtschreibung und Überarbeitung der Themekonfiguration.
- Optimierung: Verbesserung der Berechnung der maximalen Breite des Marketing-Sliders.
- Optimierung: Umbenennung der eigenen CMS-Elemente Dateinamen von  `cms-xyz-zenit-xyz.html.twig` in `cms-xyz-zen-xyz.html.twig`.
- Optimierung: Umbenennung der eigenen CMS-Elemente `zenit` in `zen` zur Vereinheitlichung.
- Optimierung: Theme-Konfiguration 'Sidebar Navigation' vom Reiter 'Kategorie' zu 'Komponenten' verschoben aufgrund der Verwendungsmöglichkeiten auf verschiedenen Seitentypen.
- Optimierung: Hinzufügen der Galerie-Slider `minHeight` `sliderConfig` aus dem Konfigurationsfeld `zen-product-gallery-slider-min-height-desktop`.
- Optimierung: Verbesserung der Custom Select Hover Farben.
- Bugfix: Behebt einen Fehler, bei welchem die Textbausteine in den zusätzlichen CMS Elementen nicht geladen wurden.
- Bugfix: Behebt einen Fehler beim Absenden der Suche im Modus Overlay Suche.
- Bugfix: Aktualisierung des Mozilla PDF-Viewers auf Version v2.9.359 wegen eines Darstellungsfehlers in Mozilla Firefox.

# 2.1.0
- Feature: Hinzufügen einer Konfiguration für globale Schriftgrößen (base, h1-h6).
- Feature: Hinzufügen einer Konfiguration für die Höhe des Galerie-Sliders auf Produkt-Detailseiten.
- Feature: Hinzufügen einer Konfigurationsoption zum Ausblenden der Top-Bar.
- Feature: Hinzufügen einer Konfigurationsoption für das Erscheinungsbild der Dots-Navigation `Expanding`.
- Feature: Hinzufügen eines PDF-Viewers zum eingebetteten Anzeigen von Datenblättern und PDFs.
- Feature: Hinzufügen einer Konfiguration zur Auswahl von zwei verschiedenen PDF-Viewer/-Renderer.
- Feature: Hinzufügen eines neuen Icon-Sets `entypo`.
- Feature: Hinzufügen eines CMS-Elements `features` (nicht verfügbar in Shopware Cloud).
- Feature: Der Galerie-Slider auf Produkt-Detailseiten wird in seiner Höhe nun vom eingestellten Produktbildverhältnis beeinflusst, sofern sie nicht in der neuen Konfigurationsoption zur manuellen Einstellung überschrieben wird.
- Feature: Slider Controls Position `Alternative` nun auch für Galerie-Slider der Produkt-Detailseiten verfügbar.
- Optimierung: Listing Render Event abonniert, um Javascript beim Filtern neu zu initiieren.
- Optimierung: Behebt einen Shopware-Bug, bei dem der Kaufen-Button auch im Listing für Varianten angezeigt wird.
- Optimierung: Verbesserung der Darstellung des Marketing-Sliders, sodass Text und Button näher beieinander liegen.
- Optimierung: Vermeidet das Durchblitzen des Hintergrunds bei Produktbildern mit Hintergrundüberlagerung aufgrund von Pixelungenauigkeiten bei Elementen mit prozentualer Breite.
- Optimierung: Rechtschreibung und Überarbeitung der Themekonfiguration.
- Kompatibilität: Überschreiben der Variable `$app-css-relative-asset-path` aufgrund von Shopware Issue NEXT-10560 (Resolve fonts relative to the theme app.css) zum Auflösen von Schriftarten mithilfe von Bundle-/Storefront-Elementen.
- Bugfix: Umbenennung der Variable `zen-category-filter-seperator` zu `zen-category-filter-separator`.

# 2.0.1
- Optimierung: Hinzufügen der SCSS Funktion strip-units zur Verbesserung der Fehlertoleranz bestimmter Konfigurationsfelder.
- Optimierung: Wechsel des Feld-Typs der Produktbild-Weite und -Höhe Konfiguration zur Verbesserung der Fehlertoleranz. 
- Optimierung: Hinzufügen von min/max Werten in der Theme-Konfiguration zur Verbesserung der Fehlertoleranz.
- Optimierung: Verbesserung der Darstellung einzelner Elemente der Theme-Konfiguration.
- Optimierung: Verbesserung von Theme-Konfiguration Hilfe-Texte.
- Optimierung: Die optionale Hintergrundfarbe wurde aus Breadcrumbs entfernt, wenn sie im Kategoriebild im Kopfbereich angezeigt werden.
- Optimierung: Umbenennung der Klasse `ZenitOverrideCookiePermissionPlugin` zu `ZenOverrideCookiePermissionPlugin`
- Optimierung: Werte von url() in Anführungszeichen gesetzt, um Darstellungsprobleme bei URLs mit Sonderzeichen zu vermeiden.
- Optimierung: Anpassung der Farbe des Wishlist-Links auf der Detailseite für dunkle Hintergründe.
- Optimierung: Verbesserung der Darstellung der Abverkauf-Labels auf der Detailseite.
- Kompatibilität: Entfernen der SnippetFile PHP-Dateien, da diese aufgrund der auto-load Funktion nicht merh benötigt werden.
- Bugfix: Verhindert, dass Dropdown Overflow-boundary die Sidebar-Filter beeinflusst.

# 2.0.0
Kompatibilität mit Shopware 6.4.0.0
__Storefront__
- Kompatibilität: Überarbeitung Logo Größe und Positionierung
- Kompatibilität: Überarbeitung der Breadcrumbs
- Kompatibilität: Hinzufügen des Wunschlisten-Templates im Header
- Kompatibilität: Hinzufügen des Wunschlisten-Templates in Produktboxen
- Kompatibilität: Hinzufügen der Wunschlisten Icons
- Kompatibilität: Entfernen der `zentheme` Variable, verwende `theme_config('my_config_key')` stattdessen
- Kompatibilität: Entfernen der `zenconfig` Variable, verwende `config('my_config_key')` stattdessen
- Kompatibilität: Entfernen der `shopware.theme.breakpoint`, verwende spezifische Größen-Variable stattdessen `theme_config('breakpoint.sm')`
- Optimierung: Entfernen der `filter-rating.html.twig`, da sie nicht mehr verwendet wird
- Optimierung: Überarbeitung der Top-Bar Weite bei Sticky Header
- Optimierung: Überarbeitung der Template-Variablen in der base.html.twig
- Optimierung: Umbenennung `zenOpenFilterOptions` in `openFilterOptions`
- Optimierung: Hinzufügen des Blocks `zen_component_login_register`
- Optimierung: Hinzufügen des Blocks `zen_component_text_slider`
- Optimierung: Hinzufügen des Blocks `zen_component_social_icons`
- Optimierung: Überarbeitung der Twig-Templates zur verbesserten Nutzung von `{{ parent() }}`
- Optimierung: Hinzufügen von Präfixen bei über 190 Twig-Blöcken zur Verbesserung der Kompatibilität
- Optimierung: Überarbeitung `zen-footer-newsletter.html.twig` als Erweiterung der `newsletter-form.html.twig`
- Optimierung: Umbenennung von `action-buy-widget-container.html.twig` in `zen-action-buy-widget-container.html.twig`
- Optimierung: Umbenennung von `action-quickview-toggle.html.twig` in `zen-action-quickview-toggle.html.twig`
- Optimierung: Umbenennung von `cover-switch.html.twig` in `zen-cover-switch.html.twig`
- Optimierung: Umbenennung von `login-register.html.twig` in `zen-zen-login-register.html.twig`
- Optimierung: Umbenennung von `text-slider.html.twig` in `zen-text-slider.html.twig`
- Optimierung: Umbenennung von `top-bar-offcanvas.html.twig` in `zen-top-bar-offcanvas.html.twig`
- Optimierung: Umbenennung von `custom-global-tab.html.twig` in `zen-custom-global-tab.html.twig`
- Optimierung: Umbenennung von `custom-tab1.html.twig` in `zen-custom-tab1.html.twig`
- Optimierung: Umbenennung von `custom-tab2.html.twig` in `zen-custom-tab2.html.twig`
- Optimierung: Umbenennung von `datasheets.html.twig` in `zen-datasheets.html.twig`
- Optimierung: Umbenennung von `manufacturer.html.twig` in `zen-manufacturer.html.twig`
- Optimierung: Umbenennung von `properties-tab.html.twig` in `zen-properties-tab.html.twig`
- Optimierung: Umbenennung von `video.html.twig` in `zen-video.html.twig`
- Optimierung: Umbenennung von `zen-social.html.twig` in `zen-social-icons.html.twig`
- Bugfix: Sticky Header bei mehrzeiligen Headern führte beim Verschwinden der Hauptnavigation zu nicht klickbaren Flächen hinter der Hauptnavigation
- Bugfix: Verhindert das Abschneiden von Filter-Dropdowns, indem ein HTMLElement als Grenze gesetzt wird

__CMS__
- Kompatibilität: Hinzufügen der Produktseiten CMS Templates
- Kompatibilität: Hinzufügen der Breadcrumbs in Produktseiten CMS
- Kompatibilität: Hinzufügen der `src/Resources/views/storefront/element/cms-element-product-description-reviews.html.twig` zum Anzeigen des `product-description-reviews` CMS-Elements
- Kompatibilität: Hinzufügen der `src/Resources/views/storefront/component/product/descrption.html.twig` zur veränderten Darstellung der Eigenschaften als Tab
- Kompatibilität: Hinzufügen der `src/Resources/views/storefront/block/cms-block-product-heading.html.twig` zur Implementierung der Produkt-Kurzbeschreibung
- Kompatibilität: Hinzufügen der `src/Resources/views/storefront/element/cms-element-product-name.html.twig` zur Umpositionierung der Bewertungen
- Optimierung: Hinzufügen von Auto-Außenabständen als Fallback der Erlebniswelten Layout-Einstellungen

__SCSS__
- Optimierung: Verbesserung der Code-Qualität anhand der Codequality-Analysis

__Administration__
- Kompatibilität: Überarbeitung des Administrations-Moduls Einstellungs-Links

__CustomFields__
- Optimierung: Entfernen der `zenCustomFieldsCategory` Variable, verwende `zenCustomFields.cagtegory` stattdessen
- Optimierung: Hinzufügen der `zenCustomFields.product` Variable anstelle von `page.product.translated.customFields`
- Optimierung: Überarbeitung des Aufrufs von Custom Fields in Twig-Templates

__Subscriber__
- Optimierung: Entfernen der `generateConfigId` Methode
- Kompatibilität: Überarbeitung des `StorefrontRenderSubscriber` Zugriff auf die Theme-Konfigurations

# 1.2.4
- Optimierung: Verbesserungen für die Anzeige von Datenblättern auf Mobilgeräten
- Optimierung: Verbesserung der Anzeige des Herstellerlinks, wenn im Hersteller kein Link gesetzt ist
- Optimierung: Refaktorierung der Plugin-Bootstrap
- Optimierung: Refaktorierung der Plugin-Konfigurations-ID für die Kompatibilität mit der Shopware Cloud
- Optimierung: Refaktorierung des Breadcrumb- und Kategorie-Image-Managements für die Kompatibilität mit der Shopware Cloud

# 1.2.3
- Feature: Datenblätter im Produkt hinterlegen und als Tab anzeigen
- Optimierung: Verbessert die Darstellung der Scroll-Navigation bei dunklem Body-Hintergrund Verbindung mit dem Plugin CMS-Extension
- Optimierung: Kleinere Verbesserungen der Custom Fields
- Optimierung: Kleinere Ausbesserungen in der Theme-Konfiguration  
- Optimierung: Refaktorierung der Variable zenplugin zu zenconfig auf Grund ihrer semantischen Bedeutung
- Optimierung: Vorbereitung für Wishlist Implementierung 
- Bugfix: Verhindert, dass die Tab-Navigation durch das negative Margin des Produkt-Sliders überdeckt werden kann

# 1.2.2
- Bugfix: Anzahl an Produkten pro Reihe ging beim Paginieren verloren
- Optimierung: Korrigiert die Darstellung der vertikalen Ausrichtung von Cross-Selling Produktslidern

# 1.2.1
- Optimierung: Verbesserung der Darstellung der Suche durch Input-Groups
- Optimierung: Verbesserung des Produkt-Box Schattens bei Produkt-Slidern
- Optimierung: Korrigiert die Darstellungsoption zur vertikalen Ausrichtung von Erlebniswelten-Elementen
- Kompatibilität: Kompatibilität mit unserem Font Change Plugin
- Bugfix: Optimiert die Darstellung des Newsletter-Inputs bei größerer Schrift
- Bugfix: Konfigurator Option Label Textfarbe bei dunkler Shop-Hintergrundfarbe

# 1.2.0
- Feature: Implementierung einer Auswahl von Google-Fonts als lokale Theme Schriften zur einfachen datenschutzkonformen Nutzung ohne externe Einbettung.
- Feature: Neue Konfiguration zur Auswahl der Theme-Schriftarten.
- Feature: Neue Konfiguration zum Umschalten der ein- und ausklappbaren Footer Spalten, sodass diese auf Mobilgeräten standardmäßig geöffnet sind.
- Feature: Neue Konfiguration um die Anzahl der Produkte pro Zeile im Listing für jeden Viewport/Gerät festzulegen.
- Feature: Neue Konfiguration zum Aktivieren oder Deaktivieren von wesentlichen Merkmalen auf Produktboxen.
- Optimierung: Verbesserungen in der theme.json
- Optimierung: Zur besseren Anpassbarkeit wurden in base.html.twig einige Twig-Blöcke hinzugefügt.
- Optimierung: Verbesserung der line-height der Produktbeschreibungen in Produktboxen
- Optimierung: Überarbeitung der Hilfetexte für Custom Code

# 1.1.4
- Feature: Code Editor in der Plugin-Konfiguration für Custom Code
- Optimierung: Positionierung der zentrierten Breadcrumbs im Header-Modus absolute und volle Breite
- Optimierung: Disabled Buttons Kontrast optimiert
- Optimierung: Erscheinungsbild des Produktkonfigurators mit abgerundeten Rändern verbessert
- Optimierung: Überarbeitung der Produkt-Box Big Image Bilddarstellung
- Optimierung: Überarbeitung der Kategoriebild-Steuerung

# 1.1.3
- Bugfix: Darstellung der Breadcrumbs auf der Detailseite bei SW 6.3.4.0

# 1.1.2
- Optimierung: Positionierung der Suggest Suchergebnisse
- Optimierung: Verhindert das Überlagern des Produktbildes von Elementen
- Optimierung: Berechnung zusätzlichen Body Paddings für Cookie Banner nur bei Default-Anzeige
- Optimierung: Administration Modul injects repositoryFactory anstatt des theme Mixins
- Kompatibilität: Verbesserung der Kompatibilität der icon.html.twig
- Kompatibilität: Verstecke Thumbnails und Dot-Navigation bei zu vielen Produktbildern - SW 6.3.4.0

# 1.1.1
- Optimierung: Überarbeitung des Events zum Ausblenden des Preloaders
- Optimierung: Überarbeitung der Produkt-Kachel Bilder Anzeigemodi im Listing
- Optimierung: Verhindert das Springen der Produkt-Actions zwischen den Transition-states im Listing
- Optimierung: Verhindert das Durchblitzen der Hintergrundfarbe der Artikelbilder auf Detailseiten
- Optimierung: DOM .page-wrapper verschoben
- Optimierung: Breite des Flyout Menüs verbessert
- Bugfix: Quickview Cart Button - PageController can't be requested via XmlHttpRequest.

# 1.1.0
- Feature:  Neue Konfiguration zur Steuerung der Footer Spalten auf Tablet- und Desktop-Geräten
- Optimierung: Verbesserung der Darstellung in bestimmten Einstellungs-Kombinationen
- Optimierung: Breite des Erweiterten Menüs im Boxed Modus
- Optimierung: Product Slider Gutter über Konfiguration der Cards Abstände setzbar. Dadurch erhalten alle Grids dieselben Abstände.
- Optimierung: Überarbeitung der Header Kombinationen in Bezug auf die Darstellung des Offcanvas Navigation Buttons
- Optimierung: Vertikale Ausrichtung von Text und Icon im Header Warenkorb Button
- Optimierung: Überarbeitung der Sticky Header Funktion
- Optimierung: Suggest Suchergebnisse scrollbar
- Bugfix: Horizontales Scrollen durch Ausklappbare Suche in Verbindung mit Header Modus Full-width-boxed behoben
- Bugfix: Deavtivating toltips on touch-devices

# 1.0.5
- Optimierung: Verbesserung Lighthouse Report: font-display: swap zur Schrifteinbettung implementiert
- Optimierung: Weitere Verbesserungen der Accessibility des Lighthouse Report
- Optimierung: Verbesserte Darstellung der Bilder im Crossselling
- Bugfix: Schließen Button der Overlay-Suche hat nach Eingabe eines Suchstrings die Suche ausgeführt, wenn der Nutter sich dazu entschieden hat, doch keine Suche durchzuführen.
- Bugfix: header-main im sticky mode in Kombination mit der hide-Option überdeckte Elemente

# 1.0.4
- Optimierung: Überarbeitung der Header Darstellung für Single Header, Standard Suche, Logo mittig und Offcanvas Main Navigation XS-MD und XS-LG
- Optimierung: Positionierung des zentrierten Logos bei Darstellung von Elementen über dem Header, z.B. Conversion Banner
- Optimierung: Verbesserung des Sticky Headers bei absoluter Positionierung
- Optimierung: Verbesserung der Sticky Header Animation bei einzeiligem Header und hide-Option
- Optimierung: Verbesserung der Sticky Header Berechnung im Javascript in Verbindung mit der hide-Option
- Kompatibilität: Absolut positionierte Header überdecken nun keine Conversion-Leisten und andere Elemente über dem Header
- Bugfix: Verhindert das Escapen von HTML der Quickview Beschreibung und Hersteller Beschreibung im Hersteller Tab

# 1.0.3
- Optimierung: Überarbeitung der Footer Paddings im Boxed Layout
- Optimierung: Überarbeitung der ausklappbaren Suche in verschiedenen Header Styles
- Optimierung: Überarbeitung der Header Erlebniswelt Überlagerung
- Feature: Header Erlebniswelt Ünberlagerung auch auf Hintergrundfarbe unabhängig eines Kategorie-Bildes
- Bugfix: Abstände der Breadcrumbs im Boxed Layout
- Bugfix: Quickview Preisausrichtung
- Bugfix: Product-Actions nach Sortierung nicht sichtbar

# 1.0.2
- Optimierung: Überarbeitung der Main Navigation Hovers
- Optimierung: Überarbeitung des Quickview Icons
- Optimierung: Überarbeitung des Header mit mehrzeiligem Header, Logo links, Suche Standard
- Bugfix: Detailseite mobile Tab-Menü
- Bugfix: Einklappbare Top Bar initialer Zustand

# 1.0.1
- Feature: Content Animationen für Erlebniswelten hinzugefügt. (mehr dazu in der Doku)
- Kompatibilität: Verbesserung der Kompatibilität bei Platzierung des Flyout Menü im Fullwidth-Modus
- Optimierung: Kleinere Optimierungen von Bezeichnungen in der Konfiguration

# 1.0.0
- Initial plugin release
