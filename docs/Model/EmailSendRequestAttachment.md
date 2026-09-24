# # EmailSendRequestAttachment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_name** | **string** | The filename of the attached file, including extension. The extension determines whether the attachment is accepted; only the following extensions are supported (case-insensitive): - Image: bmp, cdr, fpx, gif, jif, jiff, jp2, jpeg, jpg, jpx, j2k, pcd, pdf, png, psd, pspimage, thm, tif, tiff, yuv - Text/Document: doc, docx, err, log, msg, notes, pages, pwd, rtf, text, txt, vcf, wp, wp4, wp5, wp7, wpd, wps, wsd, xdl - Audio: mid, mp3, mp4, wav, wma - Video: avi, divx, f4p, flv, gvi, hdmov, hdv, m2ts, m4v, mnv, mov, movie, mp4, mp4v, mpeg, mpeg1, mpeg4, mpg, qt, rm, vob, wm, wmv - Data: csv, ics, key, pps, ppt, pptx, xlr, xls, xlsx, xml, zip  Requests including an attachment with any other extension return &#x60;400 Bad Request&#x60; with the message \&quot;attachment type is invalid\&quot;. |
**file_data** | **string** | The content of the attachment, encoded in Base64 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
