
#define FFI_SCOPE "sdl-ttf"

#include "sdl-types.h"

// =====================================================================================================================
//  Function Definitions
// =====================================================================================================================

/* This function gets the version of the dynamically linked SDL_ttf library.
   it should NOT be used to fill a version structure, instead you should
   use the SDL_TTF_VERSION() macro.
 */
extern const SDL_Version* TTF_Linked_Version(void);

/* This function tells the library whether UNICODE text is generally
   byteswapped.  A UNICODE BOM character in a string will override
   this setting for the remainder of that string.
*/
extern void TTF_ByteSwappedUNICODE(int swapped);

/* The internal structure containing font information */
typedef struct _TTF_Font TTF_Font;

/* Initialize the TTF engine - returns 0 if successful, -1 on error */
extern int TTF_Init(void);

/* Open a font file and create a font of the specified point size.
* Some .fon fonts will have several sizes embedded in the file, so the
* point size becomes the index of choosing which size.  If the value
* is too high, the last indexed size will be the default. */
extern TTF_Font* TTF_OpenFont(const char* file, int ptsize);
extern TTF_Font* TTF_OpenFontIndex(const char* file, int ptsize, long index);
extern TTF_Font* TTF_OpenFontRW(SDL_RWops *src, int freesrc, int ptsize);
extern TTF_Font* TTF_OpenFontIndexRW(SDL_RWops *src, int freesrc, int ptsize, long index);

/* Set and retrieve the font style */
extern int TTF_GetFontStyle(const TTF_Font* font);
extern void TTF_SetFontStyle(TTF_Font* font, int style);
extern int TTF_GetFontOutline(const TTF_Font* font);
extern void TTF_SetFontOutline(TTF_Font* font, int outline);

/* Set and retrieve FreeType hinter settings */
extern int TTF_GetFontHinting(const TTF_Font* font);
extern void TTF_SetFontHinting(TTF_Font* font, int hinting);

/* Get the total height of the font - usually equal to point size */
extern int TTF_FontHeight(const TTF_Font* font);

/* Get the offset from the baseline to the top of the font
   This is a positive value, relative to the baseline.
 */
extern int TTF_FontAscent(const TTF_Font* font);

/* Get the offset from the baseline to the bottom of the font
   This is a negative value, relative to the baseline.
 */
extern int TTF_FontDescent(const TTF_Font* font);

/* Get the recommended spacing between lines of text for this font */
extern int TTF_FontLineSkip(const TTF_Font* font);

/* Get/Set whether or not kerning is allowed for this font */
extern int TTF_GetFontKerning(const TTF_Font* font);
extern void TTF_SetFontKerning(TTF_Font* font, int allowed);

/* Get the number of faces of the font */
extern long TTF_FontFaces(const TTF_Font* font);

/* Get the font face attributes, if any */
extern int TTF_FontFaceIsFixedWidth(const TTF_Font* font);
extern char* TTF_FontFaceFamilyName(const TTF_Font* font);
extern char* TTF_FontFaceStyleName(const TTF_Font* font);

/* Check wether a glyph is provided by the font or not */
extern int TTF_GlyphIsProvided(const TTF_Font* font, Uint16 ch);

/* Get the metrics (dimensions) of a glyph
   To understand what these metrics mean, here is a useful link:
    http://freetype.sourceforge.net/freetype2/docs/tutorial/step2.html
 */
extern int TTF_GlyphMetrics(TTF_Font* font, Uint16 ch, int* minx, int* maxx, int* miny, int* maxy, int* advance);

/* Get the dimensions of a rendered string of text */
extern int TTF_SizeText(TTF_Font* font, const char* text, int* w, int* h);
extern int TTF_SizeUTF8(TTF_Font* font, const char* text, int* w, int* h);
extern int TTF_SizeUNICODE(TTF_Font* font, const Uint16* text, int* w, int* h);

/* Create an 8-bit palettized surface and render the given text at
   fast quality with the given font and color.  The 0 pixel is the
   colorkey, giving a transparent background, and the 1 pixel is set
   to the text color.
   This function returns the new surface, or NULL if there was an error.
*/
extern SDL_Surface* TTF_RenderText_Solid(TTF_Font* font, const char* text, SDL_Color fg);
extern SDL_Surface* TTF_RenderUTF8_Solid(TTF_Font* font, const char* text, SDL_Color fg);
extern SDL_Surface* TTF_RenderUNICODE_Solid(TTF_Font* font, const Uint16* text, SDL_Color fg);

/* Create an 8-bit palettized surface and render the given glyph at
   fast quality with the given font and color.  The 0 pixel is the
   colorkey, giving a transparent background, and the 1 pixel is set
   to the text color.  The glyph is rendered without any padding or
   centering in the X direction, and aligned normally in the Y direction.
   This function returns the new surface, or NULL if there was an error.
*/
extern SDL_Surface* TTF_RenderGlyph_Solid(TTF_Font* font, Uint16 ch, SDL_Color fg);

/* Create an 8-bit palettized surface and render the given text at
   high quality with the given font and colors.  The 0 pixel is background,
   while other pixels have varying degrees of the foreground color.
   This function returns the new surface, or NULL if there was an error.
*/
extern SDL_Surface* TTF_RenderText_Shaded(TTF_Font* font, const char* text, SDL_Color fg, SDL_Color bg);
extern SDL_Surface* TTF_RenderUTF8_Shaded(TTF_Font* font, const char* text, SDL_Color fg, SDL_Color bg);
extern SDL_Surface* TTF_RenderUNICODE_Shaded(TTF_Font* font, const Uint16* text, SDL_Color fg, SDL_Color bg);

/* Create an 8-bit palettized surface and render the given glyph at
   high quality with the given font and colors.  The 0 pixel is background,
   while other pixels have varying degrees of the foreground color.
   The glyph is rendered without any padding or centering in the X
   direction, and aligned normally in the Y direction.
   This function returns the new surface, or NULL if there was an error.
*/
extern SDL_Surface* TTF_RenderGlyph_Shaded(TTF_Font* font, Uint16 ch, SDL_Color fg, SDL_Color bg);

/* Create a 32-bit ARGB surface and render the given text at high quality,
   using alpha blending to dither the font with the given color.
   This function returns the new surface, or NULL if there was an error.
*/
extern SDL_Surface* TTF_RenderText_Blended(TTF_Font* font, const char* text, SDL_Color fg);
extern SDL_Surface* TTF_RenderUTF8_Blended(TTF_Font* font, const char* text, SDL_Color fg);
extern SDL_Surface* TTF_RenderUNICODE_Blended(TTF_Font* font, const Uint16* text, SDL_Color fg);


/* Create a 32-bit ARGB surface and render the given text at high quality,
   using alpha blending to dither the font with the given color.
   Text is wrapped to multiple lines on line endings and on word boundaries
   if it extends beyond wrapLength in pixels.
   This function returns the new surface, or NULL if there was an error.
*/
extern SDL_Surface* TTF_RenderText_Blended_Wrapped(TTF_Font* font, const char* text, SDL_Color fg, Uint32 wrapLength);
extern SDL_Surface* TTF_RenderUTF8_Blended_Wrapped(TTF_Font* font, const char* text, SDL_Color fg, Uint32 wrapLength);
extern SDL_Surface* TTF_RenderUNICODE_Blended_Wrapped(TTF_Font* font, const Uint16* text, SDL_Color fg, Uint32 wrapLength);

/* Create a 32-bit ARGB surface and render the given glyph at high quality,
   using alpha blending to dither the font with the given color.
   The glyph is rendered without any padding or centering in the X
   direction, and aligned normally in the Y direction.
   This function returns the new surface, or NULL if there was an error.
*/
extern SDL_Surface* TTF_RenderGlyph_Blended(TTF_Font* font, Uint16 ch, SDL_Color fg);

/* Close an opened font file */
extern void TTF_CloseFont(TTF_Font* font);

/* De-initialize the TTF engine */
extern void TTF_Quit(void);

/* Check if the TTF engine is initialized */
extern int TTF_WasInit(void);

/* Get the kerning size of two glyphs indices */
/* DEPRECATED: this function requires FreeType font indexes, not glyphs,
   by accident, which we don't expose through this API, so it could give
   wildly incorrect results, especially with non-ASCII values.
   Going forward, please use TTF_GetFontKerningSizeGlyphs() instead, which
   does what you probably expected this function to do. */
extern int TTF_GetFontKerningSize(TTF_Font* font, int prev_index, int index);

/* Get the kerning size of two glyphs */
extern int TTF_GetFontKerningSizeGlyphs(TTF_Font* font, Uint16 previous_ch, Uint16 ch);
