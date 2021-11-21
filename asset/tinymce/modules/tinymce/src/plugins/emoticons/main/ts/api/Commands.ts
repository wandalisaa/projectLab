/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 */

import Editor from 'tinymce/core/api/Editor';

import { EmojiDatabase } from '../core/EmojiDatabase';
import * as Dialog from '../ui/Dialog';

const register = (editor: Editor, database: EmojiDatabase): void => {
  editor.addCommand('mceEmoticons', () => Dialog.open(editor, database));
};

export {
  register
};
