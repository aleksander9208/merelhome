<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for ms2Gallery.

1.5.0-pl
==============
- Uploader grid was moved into popup window.
- [#10] Fixed handling of preview names.
- [#8] Upload processor will return object with uploaded file.

1.4.8-pl1
==============
- Updated pdoTools version in the installer.

1.4.7-pl
==============
- Improved upload of big files.
- Upload processor can handle files from remote sources.

1.4.6-pl
==============
- Improved handling of files with cyrillic names.

1.4.5-pl
==============
- [#9] Fixed sort of non-image files.
- Fixed bug with panel of msProduct.

1.4.4-pl
==============
- New system setting "new_tab_mode".
- New system setting "disable_for_ms2".

1.4.3-pl
==============
- Ability to edit tags of multiple files.
- Improved injection of gallery tab in resource page.
- Improved compatibility with AjaxManager.
- Improved multiple processors.
- Improved styles for MODX < 2.3.

1.4.2-pl
==============
- New system setting "exact_sorting".
- Some code improvements.

1.4.1-pl
==============
- New system setting "duplicate_check".
- Fixed possible overwriting files with the equal names.

1.4.0-pl
==============
- Removed extension from default file name on upload.
- Added new fields in files: "add" and "alt".
- Gallery view in manager now respects system parameter "ms2gallery_page_size".
- Added ability to specify tags for files.
- [ms2Gallery] Added parameter &tplSingle for such cases when retrieved only one file.
- [ms2Gallery] Added parameter &parents so it can load files from multiple resources.
- [ms2Gallery] Added parameter &tags for filtering files by tags.
- [ms2Gallery] Added parameter &tagsVar for specifying &tags through $_REQUEST[&tagsVar].
- [ms2Gallery] Added parameter &getTags to enable retrieving strings with tags of files.
- [ms2Gallery] Added parameter &tplSingle. It`s empty by default.
- Improved default javascript and css for calling multiple galleries on page.
- Various UI improvements.
- Fixed aggregate connection with resource in model.
- Improved upload processor.
- [#7] Fixed processing of system setting "ms2gallery_disable_for_templates".
- Fixed bug with strange numbers in pagination in the manager.

1.3.3-pl
==============
- Fixed sort processor.

1.3.2-pl2
==============
- [#5] Added system setting for disabling gallery tab for specified templates.
- [#3] Files are removed along with resources.
- [#1] Added system setting for template placeholders with resource images.
- Added system setting for limiting resources by templates ids for which placeholders will be set.
- Removed "fr" and "de" lexicons.
- Max upload size now taken from media source settings.

1.3.1-pl
==============
- Extended capacity of field "rank".

1.3.0-pl
==============
- Added snippet "ms2GalleryResources".
- Removed snippet "ms2GalleryFirstImages".

1.2.1-pl1
==============
- Fixed overwriting of resource properties on save.
- Fixed pagination in the list of images.

1.2.0-pl
==============
- Fixed adding of media_source in properties of new resource.

1.2.0-rc3
==============
- Fixed connectors_url for previews in window.

1.2.0-rc2
==============
- Removed TV "ms2Gallery".
- Improved user interface.
- Refactored gallery panel.
- Fixed work with media sources.
- Fixed panel resizing issues.
- Fixed work with AjaxManager.
- Improved getlist processor.
- Disabled for msProducts pages.
- Replaced Bootstrap icons to Font Awesome.

1.1.0-pl
==============
- Fixed work with MODX 2.3.
- Fixed sorting issues.

1.1.0-rc2
==============
- Added new parameter for media source: "imageUploadDir".
- Added new setting for component: "ms2gallery_page_size".

1.1.0-rc1
==============
- Removed class msUtil
- Refactored main class
- Added support for upload non-image files
- Removed ms2Gallery::initialize().
- Moved scripts and styles parameters to snippet ms2Gallery.
- Updated chunks for Bootstrap 3.
- Ability to update chunks on upgrade.
- Placeholders with gallery files on web page.
- Ability to disable files in gallery.
- Various fixes.
- UI improvements.
- Fixed uninstall issue.
- Progressive JPG thumbnails.
- Fixed parameter "offset" in snippet.
- Fixed parameter "idx" in snippet.

1.0.4 rc5
==============
- fix initialize ms2Gallery class in snippets

1.0.4 rc4
==============
- fix mediasource load properties

1.0.4 rc3
==============
- fix resize on client

1.0.4 rc2
==============
- fix view ms2Gallery panel in mgr

1.0.4 rc1
==============
- fix resource param in snippet
- fix config in tv call
- fix file date

Added changes from https://github.com/bezumkin/miniShop2/ (Thanks to bezumkin):
- Added new fields in "msProductFile": "hash" for sha1 of file and json field "properties".
- Added renaming files of resource gallery together with thumbnails.
- [#63] Added new parameters for media source: "imageNameType". Switching to "friendly" will generate names for uploaded files by FURLs algorithm.
- [#62] Fixed work with "*.gif" files in products gallery.
- [#56] Added JSON field "properties" to "msResourceFile".
- Updated jQuery to version 1.10.2
- Added german lexicon.

1.0.3 rc7
==============
- fix error change source
- move the gallery to tab "ms2Gallery"

1.0.3 rc6
==============
- fix lexicon for system settings

1.0.3 rc5
==============
- Update all changes from http://github.com/bezumkin/miniShop2/
- Change file uploader to Plupload (http://www.plupload.com/)
- Add resize images before upload, add this size to settings
- Update languages
- Fix bug\'s

1.0.1 beta-1
==============
- Initial release.',
    'license' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
    'readme' => '--------------------
ms2gallery
--------------------
Author: Rahimov Alexandr <alexzandr@gmail.com>
--------------------

Original and new code by:
--------------------
Author: Vasiliy Naumkin <bezumkin@yandex.ru>
--------------------',
    'chunks' => 
    array (
      'tpl.ms2Gallery.empty' => 
      array (
        'static' => false,
        'source' => 1,
        'static_file' => 'core/components/ms2gallery/elements/chunks/chunk.ms2gallery_empty.tpl',
      ),
      'tpl.ms2Gallery.outer' => 
      array (
        'static' => false,
        'source' => 1,
        'static_file' => 'core/components/ms2gallery/elements/chunks/chunk.ms2gallery_outer.tpl',
      ),
      'tpl.ms2Gallery.row' => 
      array (
        'static' => false,
        'source' => 1,
        'static_file' => 'core/components/ms2gallery/elements/chunks/chunk.ms2gallery_row.tpl',
      ),
      'tpl.ms2Gallery.single' => 
      array (
        'static' => false,
        'source' => 1,
        'static_file' => 'core/components/ms2gallery/elements/chunks/chunk.ms2gallery_single.tpl',
      ),
    ),
    'setup-options' => 'ms2gallery-1.5.0-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'ed14fab68cd72f5423eb4ceac58c1001',
      'native_key' => 'ms2gallery',
      'filename' => 'modNamespace/eaadea2dd945b5fbc5a919565bfd1b5e.vehicle',
      'namespace' => 'ms2gallery',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2eee21c09765cb605e390956ac1cb2be',
      'native_key' => 'ms2gallery_duplicate_check',
      'filename' => 'modSystemSetting/78f39b1893e5a75e1332cca7aaddd4f9.vehicle',
      'namespace' => 'ms2gallery',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '37ef6d5923ae6044b344a7d31bc6097a',
      'native_key' => 'ms2gallery_exact_sorting',
      'filename' => 'modSystemSetting/131c89bab616f56073f7071ba5003740.vehicle',
      'namespace' => 'ms2gallery',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'db7d5d6437e75775102411806cf47b58',
      'native_key' => 'ms2gallery_source_default',
      'filename' => 'modSystemSetting/e01a2711bc0423df2f38b1a0b40b9b20.vehicle',
      'namespace' => 'ms2gallery',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8ca4804c705c9910ee3b7277a518c6cd',
      'native_key' => 'ms2gallery_date_format',
      'filename' => 'modSystemSetting/5ac692ae868d59c0d5cc1bdd83892542.vehicle',
      'namespace' => 'ms2gallery',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'beff15188612c28d6990e6704c6aa1c1',
      'native_key' => 'ms2gallery_page_size',
      'filename' => 'modSystemSetting/58f393106a234671493faa2f82934228.vehicle',
      'namespace' => 'ms2gallery',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '91a55450ad27fc041834329f51f53a67',
      'native_key' => 'ms2gallery_disable_for_templates',
      'filename' => 'modSystemSetting/0a36be936d40a963771caa3cf4620191.vehicle',
      'namespace' => 'ms2gallery',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c0f1680dfe3842a82e64e5ac7c08f62b',
      'native_key' => 'ms2gallery_new_tab_mode',
      'filename' => 'modSystemSetting/0fc8212e3ce5c1ee0093adbdcdd2a103.vehicle',
      'namespace' => 'ms2gallery',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'af1169904a0482e33a4a6fdeb883505d',
      'native_key' => 'ms2gallery_disable_for_ms2',
      'filename' => 'modSystemSetting/2227caf0439f60ca7b306fc698732412.vehicle',
      'namespace' => 'ms2gallery',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '97d3ef873809dd3f7e934dc06e63d6c7',
      'native_key' => 'ms2gallery_set_placeholders',
      'filename' => 'modSystemSetting/0fad9f3d8ea6c6c25ff36b529a6dca48.vehicle',
      'namespace' => 'ms2gallery',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'af0e5f68ce308abbaa1bf2e9c75b1bb7',
      'native_key' => 'ms2gallery_placeholders_prefix',
      'filename' => 'modSystemSetting/1391988f69fc4713a1de10799789f19e.vehicle',
      'namespace' => 'ms2gallery',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6d9f63cc4644a0820ed356749f6444d3',
      'native_key' => 'ms2gallery_placeholders_tpl',
      'filename' => 'modSystemSetting/f143131364797139d0d3a28f125a2550.vehicle',
      'namespace' => 'ms2gallery',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3140de39e0c7285a8a26b1a5f4f48263',
      'native_key' => 'ms2gallery_placeholders_for_templates',
      'filename' => 'modSystemSetting/442e13170ae00c3b3c4da595928fb1d3.vehicle',
      'namespace' => 'ms2gallery',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e2a2ac10485dc949d94df694f6d718ee',
      'native_key' => 'ms2gallery_placeholders_thumbs',
      'filename' => 'modSystemSetting/9142aa8d9461408f30287c963131d5de.vehicle',
      'namespace' => 'ms2gallery',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '607222bec7befbea0000d6262cedaff0',
      'native_key' => 1,
      'filename' => 'modCategory/06ab39882a6e603b3fe1fa90e9e30288.vehicle',
      'namespace' => 'ms2gallery',
    ),
  ),
);